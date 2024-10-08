<?php

namespace Bottelet\TranslationChecker\Tests;

use Bottelet\TranslationChecker\Translator\TranslatorContract;

class TestingTranslator implements TranslatorContract
{
    public function translate(string $text, string $targetLanguage, string $sourceLanguage = 'en'): string
    {
        return 'nothing';
    }

    /**
     * @param  array<string>  $texts Array of texts to translate.
     * @return array<string> Array of translated texts.
     *
     */
    public function translateBatch(array $texts, string $targetLanguage, string $sourceLanguage = 'en'): array
    {
        $translations = [];
        foreach ($texts as $text) {
            $translations[] = 'nothing';
        }

        return $translations;
    }

    public function isConfigured(): bool
    {
        return true;
    }
}
