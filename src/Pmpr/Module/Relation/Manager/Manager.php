<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668dabb27c22f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Module\Relation\Container; abstract class Manager extends Container { const qocqgyaswyskyuwy = "\x69\x73\x5f\157\x72\x69\x67\151\x6e"; public static function persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, bool $ugceeuygogcwwoys = true) { return self::update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); } public static function update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, bool $ugceeuygogcwwoys = true) { $kuguwoaesuqsqysu = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if (is_array($icwicymcioeyeyek) && is_array($kuguwoaesuqsqysu)) { goto sqiciiuwmykocycc; } if (!(is_array($kuguwoaesuqsqysu) && in_array($icwicymcioeyeyek, array_column($kuguwoaesuqsqysu, self::gouqcwikiiygyasc), true))) { goto kwagwqyusyiyoaqs; } return $kuguwoaesuqsqysu[$icwicymcioeyeyek]; kwagwqyusyiyoaqs: if (!is_array($kuguwoaesuqsqysu)) { goto kiqogmwcgcamwiig; } $kuguwoaesuqsqysu[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys, $kuguwoaesuqsqysu); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $kuguwoaesuqsqysu); if (!$ugceeuygogcwwoys) { goto yowsmsiyimmimemc; } self::update($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, false); yowsmsiyimmimemc: return $kuguwoaesuqsqysu[$icwicymcioeyeyek]; goto iomcaiwewsawiamu; kiqogmwcgcamwiig: return self::_persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); iomcaiwewsawiamu: goto eequksumcoogyoem; sqiciiuwmykocycc: foreach ($icwicymcioeyeyek as $sqqewmoeaekuyyas => $igqsaukqcqscimok) { if (!isset($kuguwoaesuqsqysu[$igqsaukqcqscimok][self::iuqumwggccmcuyem])) { goto eqkauqciwewmgeoi; } $kuguwoaesuqsqysu[$igqsaukqcqscimok][self::iuqumwggccmcuyem] = $sqqewmoeaekuyyas; eqkauqciwewmgeoi: sciwggaeogcoesiu: } mkwskuycuyguqqok: return static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $kuguwoaesuqsqysu); eequksumcoogyoem: } public static function remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { return self::_remove(self::_remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek), $gwiwsycaaqgwmewg, $mcaisukqqyosuasi); } protected static function _persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys); static::_addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); return self::persist($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, 0); } protected static function _remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if ($soqqyqgmmuigoqiy && array_key_exists($icwicymcioeyeyek, $soqqyqgmmuigoqiy)) { goto uukumskkeggaowck; } $icwicymcioeyeyek = null; goto cggowoquuiwqkyew; uukumskkeggaowck: unset($soqqyqgmmuigoqiy[$icwicymcioeyeyek]); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); cggowoquuiwqkyew: return $icwicymcioeyeyek; } protected static function _generateData($icwicymcioeyeyek, $ugceeuygogcwwoys = 1, $soqqyqgmmuigoqiy = []) { return [self::gouqcwikiiygyasc => $icwicymcioeyeyek, self::iuqumwggccmcuyem => self::_getNextPriority($soqqyqgmmuigoqiy), self::qocqgyaswyskyuwy => $ugceeuygogcwwoys]; } protected static function _getNextPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = self::_getSortedPriority($soqqyqgmmuigoqiy); if (!$soqqyqgmmuigoqiy) { goto yiwiqaqmwiogawym; } sort($icwicymcioeyeyek); $wmegquyumsyykcka = end($icwicymcioeyeyek); if (!$wmegquyumsyykcka) { goto ocokwuuquaokmasc; } return $wmegquyumsyykcka + 1; ocokwuuquaokmasc: yiwiqaqmwiogawym: return 1; } protected static function _getSortedPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = []; if (!is_array($soqqyqgmmuigoqiy)) { goto goacqqsgaaigyuaw; } $icwicymcioeyeyek = array_map(function ($igqsaukqcqscimok) { return $igqsaukqcqscimok[self::iuqumwggccmcuyem]; }, $soqqyqgmmuigoqiy); goacqqsgaaigyuaw: return $icwicymcioeyeyek; } protected static function _filter($soqqyqgmmuigoqiy, $tsuauommsquiesmk) { if (!($tsuauommsquiesmk && $soqqyqgmmuigoqiy)) { goto egasokooagakisiy; } $eqgoocgaqwqcimie = 1; if (!($tsuauommsquiesmk != self::qocqgyaswyskyuwy)) { goto meawswgwagoqgkye; } $eqgoocgaqwqcimie = 0; meawswgwagoqgkye: foreach ($soqqyqgmmuigoqiy as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::qocqgyaswyskyuwy]) && $igqsaukqcqscimok[self::qocqgyaswyskyuwy] !== $eqgoocgaqwqcimie)) { goto mswsoaimesegiiic; } unset($soqqyqgmmuigoqiy[$uusmaiomayssaecw]); mswsoaimesegiiic: usqgaogkqgemuima: } wcesymwqykqoyuqk: egasokooagakisiy: return $soqqyqgmmuigoqiy; } public static function omaawkkwwyesqwcc($ywmkwiwkosakssii = []) { $ggauoeuaesiymgee = [self::cgiswgcumueqgcmw => -1, self::kyyscqqmsikeuaea => false, self::aisguagukaewucii => OBJECT]; return self::iwgqamekocwaigci()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public static abstract function awiyyawscoigiuae($gwiwsycaaqgwmewg); public static abstract function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); protected static abstract function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); protected static abstract function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); protected static abstract function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); }
