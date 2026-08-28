<?php

declare(strict_types=1);

namespace Sifrious\HarnessContractFixtures;

use JsonException;
use RuntimeException;

final class Fixture
{
    public static function load(string $id = 'conversation-to-answer-v1'): array
    {
        $path = dirname(__DIR__)."/fixtures/{$id}.json";
        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new RuntimeException("Fixture [{$id}] could not be read.");
        }

        try {
            return json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new RuntimeException("Fixture [{$id}] is not valid JSON.", previous: $exception);
        }
    }

    public static function source(string $id = 'conversation-to-answer-v1'): array
    {
        return self::load($id)['source'];
    }

    public static function boundary(string $boundary, string $id = 'conversation-to-answer-v1'): array
    {
        $fixture = self::load($id);

        if (! array_key_exists($boundary, $fixture['expected'])) {
            throw new RuntimeException("Fixture boundary [{$boundary}] does not exist.");
        }

        return $fixture['expected'][$boundary];
    }
}
