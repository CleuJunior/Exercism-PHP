<?php

declare(strict_types=1);

class Bob
{

    private static function isEmptyString(string $sentence): bool {
        return trim($sentence) === "";
    }

    private static function isYelling(string $sentence): bool {
        return strtoupper($sentence) === $sentence && strtoupper($sentence) !== strtolower($sentence);
    }

    private static function isQuestion(string $sentence): bool {
        return str_ends_with(trim($sentence), "?");
    }

    private function isUppercaseQuestion(string $sentence): bool {
        return $this->isQuestion($sentence) && $this->isYelling($sentence);
    }

    public function respondTo(string $sentence): string {
        if($this->isUppercaseQuestion($sentence)) return "Calm down, I know what I'm doing!";
        if($this->isQuestion($sentence)) return "Sure.";
        if($this->isYelling($sentence)) return "Whoa, chill out!";
        if($this->isEmptyString($sentence)) return "Fine. Be that way!";
        return "Whatever.";
    }
}