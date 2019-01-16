<?php
namespace AppBundle\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Finder\Finder;

class PeopleCommand extends Command {

    protected static $defaultName  = 'app:people';

    protected function configure() {
        $this -> setDescription("Display a list of user")
            -> setHelp("Only display a list of user");
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $finder = (new Finder()) -> files() -> in("app/Resources/files") -> name('peoples.yml');;

        foreach ($finder as $file) {
            $output -> writeln($file -> getContents());
        }
    }

}