<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6550df85d71cb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Module\Relation\Container; abstract class Manager extends Container { const qocqgyaswyskyuwy = "\x69\x73\137\157\162\x69\x67\x69\156"; public static function persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, bool $ugceeuygogcwwoys = true) { return self::update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); } public static function update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, bool $ugceeuygogcwwoys = true) { $kuguwoaesuqsqysu = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if (is_array($icwicymcioeyeyek) && is_array($kuguwoaesuqsqysu)) { goto yowsmsiyimmimemc; } if (!(is_array($kuguwoaesuqsqysu) && in_array($icwicymcioeyeyek, array_column($kuguwoaesuqsqysu, self::gouqcwikiiygyasc), true))) { goto mkwskuycuyguqqok; } return $kuguwoaesuqsqysu[$icwicymcioeyeyek]; mkwskuycuyguqqok: if (!is_array($kuguwoaesuqsqysu)) { goto eqkauqciwewmgeoi; } $kuguwoaesuqsqysu[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys, $kuguwoaesuqsqysu); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $kuguwoaesuqsqysu); if (!$ugceeuygogcwwoys) { goto sciwggaeogcoesiu; } self::update($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, false); sciwggaeogcoesiu: return $kuguwoaesuqsqysu[$icwicymcioeyeyek]; goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: return self::_persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); kwagwqyusyiyoaqs: goto kiqogmwcgcamwiig; yowsmsiyimmimemc: foreach ($icwicymcioeyeyek as $sqqewmoeaekuyyas => $igqsaukqcqscimok) { if (!isset($kuguwoaesuqsqysu[$igqsaukqcqscimok][self::iuqumwggccmcuyem])) { goto kuicqywysciceggs; } $kuguwoaesuqsqysu[$igqsaukqcqscimok][self::iuqumwggccmcuyem] = $sqqewmoeaekuyyas; kuicqywysciceggs: cuykwgmswkskqkyi: } csscmcacoikwsecs: return static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $kuguwoaesuqsqysu); kiqogmwcgcamwiig: } public static function remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { return self::_remove(self::_remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek), $gwiwsycaaqgwmewg, $mcaisukqqyosuasi); } protected static function _persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys); static::_addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); return self::persist($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, 0); } protected static function _remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if ($soqqyqgmmuigoqiy && array_key_exists($icwicymcioeyeyek, $soqqyqgmmuigoqiy)) { goto iomcaiwewsawiamu; } $icwicymcioeyeyek = null; goto sqiciiuwmykocycc; iomcaiwewsawiamu: unset($soqqyqgmmuigoqiy[$icwicymcioeyeyek]); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); sqiciiuwmykocycc: return $icwicymcioeyeyek; } protected static function _generateData($icwicymcioeyeyek, $ugceeuygogcwwoys = 1, $soqqyqgmmuigoqiy = []) { return [self::gouqcwikiiygyasc => $icwicymcioeyeyek, self::iuqumwggccmcuyem => self::_getNextPriority($soqqyqgmmuigoqiy), self::qocqgyaswyskyuwy => $ugceeuygogcwwoys]; } protected static function _getNextPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = self::_getSortedPriority($soqqyqgmmuigoqiy); if (!$soqqyqgmmuigoqiy) { goto uukumskkeggaowck; } sort($icwicymcioeyeyek); $wmegquyumsyykcka = end($icwicymcioeyeyek); if (!$wmegquyumsyykcka) { goto eequksumcoogyoem; } return $wmegquyumsyykcka + 1; eequksumcoogyoem: uukumskkeggaowck: return 1; } protected static function _getSortedPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = []; if (!is_array($soqqyqgmmuigoqiy)) { goto cggowoquuiwqkyew; } $icwicymcioeyeyek = array_map(function ($igqsaukqcqscimok) { return $igqsaukqcqscimok[self::iuqumwggccmcuyem]; }, $soqqyqgmmuigoqiy); cggowoquuiwqkyew: return $icwicymcioeyeyek; } protected static function _filter($soqqyqgmmuigoqiy, $tsuauommsquiesmk) { if (!($tsuauommsquiesmk && $soqqyqgmmuigoqiy)) { goto wcesymwqykqoyuqk; } $eqgoocgaqwqcimie = 1; if (!($tsuauommsquiesmk != self::qocqgyaswyskyuwy)) { goto ocokwuuquaokmasc; } $eqgoocgaqwqcimie = 0; ocokwuuquaokmasc: foreach ($soqqyqgmmuigoqiy as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::qocqgyaswyskyuwy]) && $igqsaukqcqscimok[self::qocqgyaswyskyuwy] !== $eqgoocgaqwqcimie)) { goto meawswgwagoqgkye; } unset($soqqyqgmmuigoqiy[$uusmaiomayssaecw]); meawswgwagoqgkye: goacqqsgaaigyuaw: } yiwiqaqmwiogawym: wcesymwqykqoyuqk: return $soqqyqgmmuigoqiy; } public static function omaawkkwwyesqwcc($ywmkwiwkosakssii = []) { $ggauoeuaesiymgee = [self::cgiswgcumueqgcmw => -1, self::kyyscqqmsikeuaea => false, self::aisguagukaewucii => OBJECT]; return self::iwgqamekocwaigci()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public static abstract function awiyyawscoigiuae($gwiwsycaaqgwmewg); public static abstract function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); protected static abstract function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); protected static abstract function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); protected static abstract function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); }
