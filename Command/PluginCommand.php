<?php

namespace Cornerstones\ShopwareGeneratorBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PluginCommand extends Command {

	protected static $defaultName = "sgb:plugin";

	protected function configure()
	{
		$this->setName($defaultName)->setDescription('Create/Update Shopware plugin');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln('Placeholder');
	}
}
