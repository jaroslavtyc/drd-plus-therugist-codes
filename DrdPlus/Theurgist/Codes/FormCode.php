<?php
declare(strict_types = 1);

namespace DrdPlus\Theurgist\Codes;

/**
 * @method static FormCode getIt($codeValue)
 */
class FormCode extends AbstractTheurgistCode
{
    public const DIRECT = 'direct';
    public const INDIRECT = 'indirect';
    public const VOLUME = 'volume';
    public const PLANAR = 'planar';
    public const BEAM = 'beam';
    public const TANGIBLE = 'tangible';
    public const INTANGIBLE = 'intangible';
    public const VISIBLE = 'visible';
    public const INVISIBLE = 'invisible';
    public const BY_FORMULA = 'by_formula';

    /**
     * @return array
     */
    public static function getPossibleValues(): array
    {
        return [
            self::DIRECT,
            self::INDIRECT,
            self::VOLUME,
            self::PLANAR,
            self::BEAM,
            self::TANGIBLE,
            self::INTANGIBLE,
            self::VISIBLE,
            self::INVISIBLE,
            self::BY_FORMULA,
        ];
    }

    private static $translations = [
        'cs' => [
            self::DIRECT => 'přímmá',
            self::INDIRECT => 'nepřímá',
            self::VOLUME => 'objemová',
            self::PLANAR => 'plošná',
            self::BEAM => 'paprsková',
            self::TANGIBLE => 'hmotná',
            self::INTANGIBLE => 'nehmotná',
            self::VISIBLE => 'viditelná',
            self::INVISIBLE => 'neviditelná',
            self::BY_FORMULA => 'podle formule',
        ],
    ];

    /**
     * @param string $languageCode
     * @return array|string[]
     */
    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }

}