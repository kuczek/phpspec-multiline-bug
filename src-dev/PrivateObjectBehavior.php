<?php

namespace Kuczek\TestDev;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @author    Krystian Kuczek <krystian@hexmedia.pl>
 * @copyright 2013-2016 Hexmedia.pl
 * @license   @see LICENSE
 */
class PrivateObjectBehavior extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable2()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable3()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable4()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable5()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable6()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_has_too_many_arguments_and_i_split_them_into_multiple_line_so_this_is_breaking_the_system(
        $arg1,
        $arg2,
        $arg3,
        $someVeryLongArgument1,
        $arg12,
        $arg13,
        $arg14,
        $someVeryLongArgument11,
        $arg21,
        $arg22,
        $arg23,
        $someVeryLongArgument21
    ) {
        $this->canBeCalled()->shouldReturn(true);
    }

    function it_is_initializable7()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable8()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable9()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable10()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable11()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable12()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable13()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable14()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }

    function it_is_initializable15()
    {
        $this->shouldHaveType('Kuczek\Test\MultilineArguments2');
    }
}
