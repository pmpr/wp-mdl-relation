<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b29b3574646             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Relation; use WP_Post; class PostManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; $ayegqaqygsqsmews = Relation::symcgieuakksimmu()->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($ayegqaqygsqsmews && isset($ayegqaqygsqsmews->{self::igecewwoemccgwsq}))) { goto ocokwuuquaokmasc; } $useksmwkuswkwcqg = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $ywmkwiwkosakssii[self::osocaqqumyuooqyo] = $gwiwsycaaqgwmewg; $ywmkwiwkosakssii[self::iwmgegikocuwggua] = null; $ywmkwiwkosakssii[self::gikuasuikwemyqoq] = self::wmmucsiyiyusmssm; $oammesyieqmwuwyi = [$useksmwkuswkwcqg, self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii)]; ocokwuuquaokmasc: return $oammesyieqmwuwyi; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto goacqqsgaaigyuaw; } $soqqyqgmmuigoqiy = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->sagscekukkacqaaw($soqqyqgmmuigoqiy, self::iuqumwggccmcuyem, $ywmkwiwkosakssii[self::cgiswgcumueqgcmw]); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto yiwiqaqmwiogawym; } $icwicymcioeyeyek = self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($ccamueccusigaaio, [self::gqiasegggowomgie => self::eqomgewoayseioos, self::eqomgewoayseioos => $icwicymcioeyeyek, "\x73\165\160\160\x72\x65\163\x73\137\x66\x69\x6c\164\145\162\x73" => true]); yiwiqaqmwiogawym: goacqqsgaaigyuaw: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->giwmekimakcaawsq($gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy, $mcaisukqqyosuasi); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { self::haqswuugoswcyoia()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($gwiwsycaaqgwmewg, $icwicymcioeyeyek, $mcaisukqqyosuasi); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->igawqaomowicuayw($gwiwsycaaqgwmewg, $mcaisukqqyosuasi, true); } }
