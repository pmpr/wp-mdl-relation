<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554aebf97b80             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Manager; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Hook; use WP_Post; class PostManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; $ayegqaqygsqsmews = Hook::symcgieuakksimmu()->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($ayegqaqygsqsmews && isset($ayegqaqygsqsmews->{self::igecewwoemccgwsq}))) { goto usqgaogkqgemuima; } $useksmwkuswkwcqg = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $ywmkwiwkosakssii[self::osocaqqumyuooqyo] = $gwiwsycaaqgwmewg; $ywmkwiwkosakssii[self::iwmgegikocuwggua] = null; $ywmkwiwkosakssii[self::gikuasuikwemyqoq] = self::wmmucsiyiyusmssm; $oammesyieqmwuwyi = [$useksmwkuswkwcqg, self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii)]; usqgaogkqgemuima: return $oammesyieqmwuwyi; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto egasokooagakisiy; } $soqqyqgmmuigoqiy = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->sagscekukkacqaaw($soqqyqgmmuigoqiy, self::iuqumwggccmcuyem, $ywmkwiwkosakssii[self::cgiswgcumueqgcmw]); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto mswsoaimesegiiic; } $icwicymcioeyeyek = self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->ciugwooasaqcywas($ccamueccusigaaio, [self::gqiasegggowomgie => self::eqomgewoayseioos, self::eqomgewoayseioos => $icwicymcioeyeyek, "\163\x75\x70\160\x72\145\163\x73\x5f\146\x69\x6c\164\x65\x72\163" => true]); mswsoaimesegiiic: egasokooagakisiy: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->giwmekimakcaawsq($gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy, $mcaisukqqyosuasi); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { self::haqswuugoswcyoia()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return self::iwgqamekocwaigci()->ayueggmoqeeukqmq()->igawqaomowicuayw($gwiwsycaaqgwmewg, $mcaisukqqyosuasi, true); } }
