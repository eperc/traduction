<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\user;

class SetUserTypeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('user:set_type')
            ->setDescription('Set user type')
            ->setDefinition(array(
                new InputArgument('username', InputArgument::REQUIRED, 'The username'),
                new InputArgument('type', InputArgument::REQUIRED, 'The type'),
            ))
            ->setHelp(<<<EOT
The <info>user:set_type</info> command set user type:

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
        $type      = $input->getArgument('type');

        $userManager = $this->getContainer()->get('fos_user.user_manager');

        $user = $userManager->findUserByUserName($username);       
        $user->setType($type); 
        $userManager->updateUser($user,true);

        $output->writeln(sprintf('Set type <comment>%s</comment> to user <comment>%s</comment>',$type ,$username));
    }
}

?>