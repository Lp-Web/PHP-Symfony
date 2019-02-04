<?php

namespace AppBundle\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\InputOption;

class AnnonceUnable extends Command {

  protected static $defaultName = 'app:annonce';
  private $manager;

  public function __construct(EntityManagerInterface $manager) {
    parent::__construct();
    $this -> manager = $manager;
  }

  protected function configure() {
    $this -> setDescription('Commands to unable some annonces') 
      -> setHelp('php bin/console app:unable <name> [--reverse]')
      -> addArgument('id', InputArgument::OPTIONAL, 'Id to unable')
      -> addOption('reverse', ['r'], InputOption::VALUE_OPTIONAL, 'if you want to activate a annonce', false);
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    $id = $input -> getArgument('id');
    $reverse = ($input -> getOption('reverse') !== false);

    if(!$id) {
      return $output -> writeln('Argument must be a id > 0');
    }

    $annonce = $this -> manager -> getRepository('AppBundle:Annonce') -> find($id);

    if(!$annonce) {
      return $output -> writeln('Annonce is null probably due to a too hight id');
    }

    $annonce -> setUnable($reverse);
    $this -> manager -> flush();

    return $output -> writeln('Annonce with id: [' . $id . '] is ' . ($reverse ? 'activated' : 'unable'));
  }

}