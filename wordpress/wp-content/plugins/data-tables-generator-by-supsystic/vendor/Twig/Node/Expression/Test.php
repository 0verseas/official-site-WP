<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_SupTwgDtgs_Node_Expression_Test extends Twig_SupTwgDtgs_Node_Expression_Call
{
    public function __construct(Twig_SupTwgDtgs_NodeInterface $node, $name, Twig_SupTwgDtgs_NodeInterface $arguments = null, $lineno)
    {
        $nodes = array('node' => $node);
        if (null !== $arguments) {
            $nodes['arguments'] = $arguments;
        }

        parent::__construct($nodes, array('name' => $name), $lineno);
    }

    public function compile(Twig_SupTwgDtgs_Compiler $compiler)
    {
        $name = $this->getAttribute('name');
        $test = $compiler->getEnvironment()->getTest($name);

        $this->setAttribute('name', $name);
        $this->setAttribute('type', 'test');
        $this->setAttribute('thing', $test);
        if ($test instanceof Twig_SupTwgDtgs_TestCallableInterface || $test instanceof Twig_SupTwgDtgs_SimpleTest) {
            $this->setAttribute('callable', $test->getCallable());
        }
        if ($test instanceof Twig_SupTwgDtgs_SimpleTest) {
            $this->setAttribute('is_variadic', $test->isVariadic());
        }

        $this->compileCallable($compiler);
    }
}
