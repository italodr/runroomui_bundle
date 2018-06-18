<?php

/*
 * This file is part of the Runroom/Archetype-Symfony project.
 *
 * (c) Runroom
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace RunroomUi\Bundle\UiBundle\Twig;

class PercentageExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('runroom_percentage', [$this, 'getPercentage']),
        ];
    }

    /**
     * @param float $number
     *
     * @return string
     */
    public function getPercentage(float $number): string
    {
        $percentage = $number * 100;

        return $percentage . ' %';
    }
}
