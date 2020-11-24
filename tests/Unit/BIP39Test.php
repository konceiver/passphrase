<?php

declare(strict_types=1);

use Konceiver\Passphrase\BIP39;

it('should generate a random passphrase', function ($bip39): void {
    expect($bip39->generate(12))->toBeString();
    expect($bip39->generate(24))->toBeString();
})->with([
    BIP39::new()->useChineseSimplified(),
    BIP39::new()->useChineseTraditional(),
    BIP39::new()->useCzech(),
    BIP39::new()->useEnglish(),
    BIP39::new()->useFrench(),
    BIP39::new()->useItalian(),
    BIP39::new()->useJapanese(),
    BIP39::new()->useKorean(),
    BIP39::new()->useSpanish(),
]);