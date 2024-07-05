<?php

namespace App\Services;

use App\Models\Quote;
use App\Models\Destination;
use App\Models\Site;
use App\Models\User;

class TemplateManager
{
// Remplace les variables dans le template donné avec les données fournies.
    public function getTemplateComputed($template, array $data)
    {
        if (!$template) {
            throw new \InvalidArgumentException('No template provided');
        }

        // Clone le template pour éviter de modifier l'original
        $computedTemplate = clone($template);
        $computedTemplate->subject = $this->replaceTextVariables($computedTemplate->subject, $data);
        $computedTemplate->content = $this->replaceTextVariables($computedTemplate->content, $data);

        return $computedTemplate;
    }

//    Remplace les variables dans le texte avec les données fournies.
    private function replaceTextVariables($text, array $data)
    {
        $applicationContext = ApplicationContext::getInstance();

        // Utilise les données de citation si disponibles
        $quote = $data['quote'] ?? null;
        $user = $data['user'] ?? $applicationContext->getCurrentUser();

        if ($quote) {
            $quoteFromRepository = Quote::find($quote->id);
            $site = Site::find($quote->site_id);
            $destination = Destination::find($quote->destination_id);

            if (strpos($text, '[quote:destination_link]') !== false) {
                $text = str_replace('[quote:destination_link]', $site->url . '/' . $destination->country_name . '/quote/' . $quoteFromRepository->id, $text);
            }

            if (strpos($text, '[quote:summary_html]') !== false) {
                $text = str_replace('[quote:summary_html]', Quote::renderHtml($quoteFromRepository), $text);
            }

            if (strpos($text, '[quote:summary]') !== false) {
                $text = str_replace('[quote:summary]', Quote::renderText($quoteFromRepository), $text);
            }

            if (strpos($text, '[quote:destination_name]') !== false) {
                $text = str_replace('[quote:destination_name]', $destination->country_name, $text);
            }
        }

        // Utilise les données de l'utilisateur si disponibles
        if ($user) {
            if (strpos($text, '[user:first_name]') !== false) {
                $text = str_replace('[user:first_name]', ucfirst(mb_strtolower($user->firstname)), $text);
            }
        }

        return $text;
    }
}
