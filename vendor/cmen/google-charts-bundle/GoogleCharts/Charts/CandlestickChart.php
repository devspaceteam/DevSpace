<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CandlestickChart\CandlestickChartOptions;

/**
 * @author Christophe Meneses
 */
class CandlestickChart extends Chart
{
    /**
     * @var CandlestickChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new CandlestickChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'CandlestickChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return CandlestickChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options CandlestickChartOptions
     *
     * @return CandlestickChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
