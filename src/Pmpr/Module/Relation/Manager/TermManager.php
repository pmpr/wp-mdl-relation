<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6684010468ccd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Module\Relation\Entity\Term; use Pmpr\Module\Relation\Hook; class TermManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg) : array { $ksaameoqigiaoigg = []; $igqsaukqcqscimok = Hook::symcgieuakksimmu()->ugcmciwwskkeimse(Term::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($igqsaukqcqscimok && isset($igqsaukqcqscimok->{self::igecewwoemccgwsq}))) { goto qwigomakwmyiwkgo; } $iakkeikwceeomgyq = $igqsaukqcqscimok->{self::igecewwoemccgwsq}; $ksaameoqigiaoigg = [$iakkeikwceeomgyq, self::iwgqamekocwaigci()->kckogqkiycqeumoa()->qgisekcaywsmigga($gwiwsycaaqgwmewg, $iakkeikwceeomgyq)]; qwigomakwmyiwkgo: return $ksaameoqigiaoigg; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $mcaisukqqyosuasi = self::iwgqamekocwaigci()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($mcaisukqqyosuasi); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto asmecuqiyyswueqe; } $soqqyqgmmuigoqiy = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->sagscekukkacqaaw($soqqyqgmmuigoqiy, self::iuqumwggccmcuyem); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto myoicgcuugciueis; } $icwicymcioeyeyek = self::iwgqamekocwaigci()->kckogqkiycqeumoa()->ciugwooasaqcywas($ccamueccusigaaio, [self::ackcaikowcokggsc => $icwicymcioeyeyek]); myoicgcuugciueis: asmecuqiyyswueqe: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { self::haqswuugoswcyoia()->kckogqkiycqeumoa()->giwmekimakcaawsq($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { self::haqswuugoswcyoia()->kckogqkiycqeumoa()->ksmqawcowkmegigw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return self::iwgqamekocwaigci()->kckogqkiycqeumoa()->igawqaomowicuayw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, true); } }
