<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634be2b89fc17             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Relation\Entity\Term; use Pmpr\Module\Relation\Relation; class TermManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg) : array { $ksaameoqigiaoigg = []; $igqsaukqcqscimok = Relation::symcgieuakksimmu()->ugcmciwwskkeimse(Term::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($igqsaukqcqscimok && isset($igqsaukqcqscimok->{self::igecewwoemccgwsq}))) { goto iwsuawwqomaowuii; } $iakkeikwceeomgyq = $igqsaukqcqscimok->{self::igecewwoemccgwsq}; $ksaameoqigiaoigg = [$iakkeikwceeomgyq, ManipulateTerm::qgisekcaywsmigga($gwiwsycaaqgwmewg, $iakkeikwceeomgyq)]; iwsuawwqomaowuii: return $ksaameoqigiaoigg; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $mcaisukqqyosuasi = ManipulateTerm::mwikyscisascoeea($mcaisukqqyosuasi); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto asiqwuoswmigcaki; } $soqqyqgmmuigoqiy = ManipulateArray::sagscekukkacqaaw($soqqyqgmmuigoqiy, self::iuqumwggccmcuyem); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto wcugqegqsuuuwqao; } $icwicymcioeyeyek = ManipulateTerm::ciugwooasaqcywas($ccamueccusigaaio, [self::ackcaikowcokggsc => $icwicymcioeyeyek]); wcugqegqsuuuwqao: asiqwuoswmigcaki: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { ManipulateTerm::giwmekimakcaawsq($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { ManipulateTerm::ksmqawcowkmegigw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return ManipulateTerm::igawqaomowicuayw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, true); } }
