<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff9686830a2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Relation; use WP_Post; class PostManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; $ayegqaqygsqsmews = Relation::symcgieuakksimmu()->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($ayegqaqygsqsmews && isset($ayegqaqygsqsmews->{self::igecewwoemccgwsq}))) { goto ywqgcegomwaiuquc; } $useksmwkuswkwcqg = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $ywmkwiwkosakssii[self::osocaqqumyuooqyo] = $gwiwsycaaqgwmewg; $ywmkwiwkosakssii[self::iwmgegikocuwggua] = null; $ywmkwiwkosakssii[self::gikuasuikwemyqoq] = self::wmmucsiyiyusmssm; $oammesyieqmwuwyi = [$useksmwkuswkwcqg, self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii)]; ywqgcegomwaiuquc: return $oammesyieqmwuwyi; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto soqqemyioggmoakg; } $soqqyqgmmuigoqiy = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->sagscekukkacqaaw($soqqyqgmmuigoqiy, self::iuqumwggccmcuyem, $ywmkwiwkosakssii[self::cgiswgcumueqgcmw]); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto wmmggowmigekyoso; } $icwicymcioeyeyek = self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($ccamueccusigaaio, [self::gqiasegggowomgie => self::eqomgewoayseioos, self::eqomgewoayseioos => $icwicymcioeyeyek, "\163\165\x70\x70\x72\145\163\x73\137\146\151\x6c\x74\x65\162\163" => true]); wmmggowmigekyoso: soqqemyioggmoakg: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->giwmekimakcaawsq($gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy, $mcaisukqqyosuasi); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { self::haqswuugoswcyoia()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($gwiwsycaaqgwmewg, $icwicymcioeyeyek, $mcaisukqqyosuasi); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->igawqaomowicuayw($gwiwsycaaqgwmewg, $mcaisukqqyosuasi, true); } }
