<?php
    class Head

    {
        private $Banner;
        private $Title;

        function __construct(string $banner, string $title)
        {
            $this->Banner = $banner;
            $this->Title = $title;
        }

        function getBanner()
        {
            echo '<div class="banner-'.$this->Banner.'">';
        }

        function getTitle()
        {
            echo '</div><h1 class="head">'.$this->Title;
            include("./img/icons/streep.svg");
            echo '</h1>';
        }
    }
?>