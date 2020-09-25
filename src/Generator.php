<?php

namespace Labomatik\CalendarLinks;

interface Generator
{
    public function generate(Link $link): string;
    public function generateOnlyString(Link $link): string;
}
