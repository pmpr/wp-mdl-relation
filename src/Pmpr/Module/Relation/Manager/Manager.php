<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11b220dd6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Relation\Container; abstract class Manager extends Container { const qocqgyaswyskyuwy = "\x69\163\137\x6f\162\x69\x67\151\x6e"; public static function persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, bool $ugceeuygogcwwoys = true) { return self::update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); } public static function update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, bool $ugceeuygogcwwoys = true) { $kuguwoaesuqsqysu = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if (is_array($icwicymcioeyeyek) && is_array($kuguwoaesuqsqysu)) { goto usquiuuyiyqaeyiu; } if (!(is_array($kuguwoaesuqsqysu) && in_array($icwicymcioeyeyek, array_column($kuguwoaesuqsqysu, Constants::gouqcwikiiygyasc), true))) { goto foeeqckqsyockkak; } return $kuguwoaesuqsqysu[$icwicymcioeyeyek]; foeeqckqsyockkak: if (!is_array($kuguwoaesuqsqysu)) { goto hoeeyiowekaeemko; } $kuguwoaesuqsqysu[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys, $kuguwoaesuqsqysu); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $kuguwoaesuqsqysu); if (!$ugceeuygogcwwoys) { goto iekumemscwieugqw; } self::update($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, false); iekumemscwieugqw: return $kuguwoaesuqsqysu[$icwicymcioeyeyek]; goto kymkucucyeoeikim; hoeeyiowekaeemko: return self::_persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); kymkucucyeoeikim: goto qicwaskssogcokgm; usquiuuyiyqaeyiu: foreach ($icwicymcioeyeyek as $sqqewmoeaekuyyas => $igqsaukqcqscimok) { if (!isset($kuguwoaesuqsqysu[$igqsaukqcqscimok][Constants::iuqumwggccmcuyem])) { goto oqugqwcyomiaaoqu; } $kuguwoaesuqsqysu[$igqsaukqcqscimok][Constants::iuqumwggccmcuyem] = $sqqewmoeaekuyyas; oqugqwcyomiaaoqu: eeqesooyqagwawae: } suswcqoyyqkkquuo: return static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $kuguwoaesuqsqysu); qicwaskssogcokgm: } public static function remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { return self::_remove(self::_remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek), $gwiwsycaaqgwmewg, $mcaisukqqyosuasi); } protected static function _persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys); static::_addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); return self::persist($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, 0); } protected static function _remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if ($soqqyqgmmuigoqiy && array_key_exists($icwicymcioeyeyek, $soqqyqgmmuigoqiy)) { goto uguigkcmukuouway; } $icwicymcioeyeyek = null; goto uqqaiagaeqgqgaiy; uguigkcmukuouway: unset($soqqyqgmmuigoqiy[$icwicymcioeyeyek]); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); uqqaiagaeqgqgaiy: return $icwicymcioeyeyek; } protected static function _generateData($icwicymcioeyeyek, $ugceeuygogcwwoys = 1, $soqqyqgmmuigoqiy = []) { return [Constants::gouqcwikiiygyasc => $icwicymcioeyeyek, Constants::iuqumwggccmcuyem => self::_getNextPriority($soqqyqgmmuigoqiy), self::qocqgyaswyskyuwy => $ugceeuygogcwwoys]; } protected static function _getNextPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = self::_getSortedPriority($soqqyqgmmuigoqiy); if (!$soqqyqgmmuigoqiy) { goto gaomwagkcciesyqy; } sort($icwicymcioeyeyek); $wmegquyumsyykcka = end($icwicymcioeyeyek); if (!$wmegquyumsyykcka) { goto esuiysskoweawsue; } return $wmegquyumsyykcka + 1; esuiysskoweawsue: gaomwagkcciesyqy: return 1; } protected static function _getSortedPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = []; if (!is_array($soqqyqgmmuigoqiy)) { goto aegysmeecgcgayyw; } $icwicymcioeyeyek = array_map(function ($igqsaukqcqscimok) { return $igqsaukqcqscimok[Constants::iuqumwggccmcuyem]; }, $soqqyqgmmuigoqiy); aegysmeecgcgayyw: return $icwicymcioeyeyek; } protected static function _filter($soqqyqgmmuigoqiy, $tsuauommsquiesmk) { if (!($tsuauommsquiesmk && $soqqyqgmmuigoqiy)) { goto cgiscsqwwgqqaeqi; } $eqgoocgaqwqcimie = 1; if (!($tsuauommsquiesmk != self::qocqgyaswyskyuwy)) { goto suqkuqygkkgwyaie; } $eqgoocgaqwqcimie = 0; suqkuqygkkgwyaie: foreach ($soqqyqgmmuigoqiy as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::qocqgyaswyskyuwy]) && $igqsaukqcqscimok[self::qocqgyaswyskyuwy] !== $eqgoocgaqwqcimie)) { goto skkamseieeusycye; } unset($soqqyqgmmuigoqiy[$uusmaiomayssaecw]); skkamseieeusycye: wiysogeqqwgioyka: } soaccwqimeksgwiw: cgiscsqwwgqqaeqi: return $soqqyqgmmuigoqiy; } public static function omaawkkwwyesqwcc($ywmkwiwkosakssii = []) { $ggauoeuaesiymgee = [Constants::cgiswgcumueqgcmw => -1, Constants::kyyscqqmsikeuaea => false, Constants::aisguagukaewucii => OBJECT]; return self::iwgqamekocwaigci()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public static abstract function awiyyawscoigiuae($gwiwsycaaqgwmewg); public static abstract function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); protected static abstract function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); protected static abstract function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); protected static abstract function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); }
