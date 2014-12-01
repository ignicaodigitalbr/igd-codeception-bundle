<?php
/**
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace Igd\CodeceptionBundle\Commands\Selenium;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Get the selenium standalone server from the provided link.
 *
 * @author Lucas Oliveira <contato@devlucas.eti.br>
 * @since  1.0
 */
class GetCommand extends Command
{
    /**
     * @var string
     */
    private $originLink;

    /**
     * Constructor.
     *
     * @param string $link The selenium standalone link.
     */
    public function __construct($link)
    {
        $this->originLink = $link;

        parent::__construct();
    }

    /**
     * Configure the selenium get command.
     *
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('igd:codeception:selenium:get')
            ->setDescription('Get the selenium standalone server from the provided link.')
        ;
    }

    /**
     * Execute the command.
     *
     * {@inheritdoc}
     *
     * @param InputInterface $input The input object provided by the symfony/console.
     * @param OutputInterface $output The output object provided by the symfony/console.
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $out = $this->originLink;

        $output->writeln('Test the dependence injection:');
        $output->writeln($out);

        $output->writeln("It's ok!");
    }
}
