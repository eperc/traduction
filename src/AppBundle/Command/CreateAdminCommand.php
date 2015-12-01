<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Admin;

class CreateAdminCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('admin:create')
            ->setDescription('Create a admin.')
            ->setDefinition(array(
                new InputArgument('username', InputArgument::REQUIRED, 'The username'),
                new InputArgument('email', InputArgument::REQUIRED, 'The email'),
                new InputArgument('password', InputArgument::REQUIRED, 'The password'),
                new InputOption('super-admin', null, InputOption::VALUE_NONE, 'Set the user as super admin'),
                new InputOption('inactive', null, InputOption::VALUE_NONE, 'Set the user as inactive'),
            ))
            ->setHelp(<<<EOT
The <info>admin:create</info> command creates a admin:

  <info>php app/console fos:user:create matthieu</info>

This interactive shell will ask you for an email and then a password.

You can alternatively specify the email and password as the second and third arguments:

  <info>php app/console fos:user:create matthieu matthieu@example.com mypassword</info>

You can create a super admin via the super-admin flag:

  <info>php app/console fos:user:create admin --super-admin</info>

You can create an inactive user (will not be able to log in):

  <info>php app/console fos:user:create thibault --inactive</info>

EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)    
    {
        $username   = $input->getArgument('username');
        $email      = $input->getArgument('email');
        $password   = $input->getArgument('password');
        $inactive   = $input->getOption('inactive');
        $superadmin = $input->getOption('super-admin'); 

        $discriminator = $this->getContainer()->get('pugx_user.manager.user_discriminator');
        $discriminator->setClass('Acme\UserBundle\Entity\Admin');
        $userManager = $this->getContainer()->get('pugx_user_manager');

        $admin = $userManager->createUser();  
        $admin->setUsername($username);
        $admin->setEmail($email);
        $admin->setPlainPassword($password);
        $admin->setEnabled(!(Boolean) $inactive);
        $admin->setSuperAdmin((Boolean) $superadmin);
        
        $userManager->updateUser($admin,true);

        $output->writeln(sprintf('Created admin <comment>%s</comment>', $username));
    }
}

?>