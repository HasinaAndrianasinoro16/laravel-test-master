<?php

namespace App\Services;

use App\Models\Quote;
use App\Models\Destination;
use App\Models\Site;
use App\Models\User;

class TemplateManager
{
    // Remplacer les variables dans le texte du template par les données fournies
    public function replaceTextVariables($templateText, $data)
    {
        $quote = $data['quote'] ?? null;
        $user = $data['user'] ?? null;

        if ($quote && $quote instanceof Quote) {
            $quoteFromRepository = Quote::find($quote->id);
            $site = Site::find($quote->site_id);
            $destination = Destination::find($quote->destination_id);

            if ($site && $destination) {
                $templateText = str_replace(
                    '[quote:destination_link]',
                    $site->url . '/' . $destination->country_name . '/quote/' . $quoteFromRepository->id,
                    $templateText
                );

                $templateText = str_replace(
                    '[quote:summary_html]',
                    htmlspecialchars(Quote::renderHtml($quoteFromRepository), ENT_QUOTES, 'UTF-8'),
                    $templateText
                );

                $templateText = str_replace(
                    '[quote:summary]',
                    Quote::renderText($quoteFromRepository),
                    $templateText
                );

                $templateText = str_replace(
                    '[quote:destination_name]',
                    $destination->country_name,
                    $templateText
                );
            }
        }

        if ($user) {
            $templateText = str_replace('[user:first_name]', ucfirst(mb_strtolower($user->firstname)), $templateText);
        }

        return $templateText;
    }
}
