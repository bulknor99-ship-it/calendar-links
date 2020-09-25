<?php

namespace Labomatik\CalendarLinks;

interface Generator
{
    public function generate(Link $link): string;
}
