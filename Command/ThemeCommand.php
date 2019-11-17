<?php

namespace Cornerstones\ShopwareGeneratorBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ThemeCommand extends Command {

	protected static $defaultName = "sgb:theme";

	protected function configure()
	{
		$this->setName($defaultName)->setDescription('Create/Update Shopware theme');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln('Placeholder');
	}
}
