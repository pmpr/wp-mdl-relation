<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e5112746e86             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use stdClass; abstract class Container extends BaseClass { const esgskoesuqecuuwg = "\162\145\x6c\x61\164\x69\x6f\x6e\x5f"; const ggsoiqkcasskkeae = "\160\x6f\163\x74\137\x5f\151\x6e\x5f\x72\x65\154\141\164\x69\x6f\x6e"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function iucouyoswwsakqyc($ccamueccusigaaio) : array { $oammesyieqmwuwyi = []; $cmaccwokqweqweqi = $this->weysguygiseoukqw($ccamueccusigaaio, []); foreach ($cmaccwokqweqweqi as $igqsaukqcqscimok) { if (!($uusmaiomayssaecw = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, self::ascagqcquwgmygkm))) { goto ooeausyowguqicuo; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; ooeausyowguqicuo: gkyawqqcmigqgaiq: } wmywuusgukmmaams: return $oammesyieqmwuwyi; } public function ggiqwoiwqoieoeqe($ayegqaqygsqsmews) { if (!$ayegqaqygsqsmews) { goto omqiayeucoioqoao; } $wkmckkosmqouwqko = clone $ayegqaqygsqsmews; if (!$wkmckkosmqouwqko instanceof stdClass) { goto igooksugieceoege; } $gmawcgiwcmsukeiu = [self::igecewwoemccgwsq => self::gygsikewooaciecc, self::qgwwgcuuykqagamk => self::uyqakoogaigomqmq]; foreach ($gmawcgiwcmsukeiu as $sysgmomuyiiawwcm => $gcegymooyemmaysk) { if (!isset($wkmckkosmqouwqko->{$sysgmomuyiiawwcm}, $wkmckkosmqouwqko->{$gcegymooyemmaysk})) { goto cewmoqyysgsmuiya; } $umkokecyamcwcqwe = $wkmckkosmqouwqko->{$sysgmomuyiiawwcm}; $wkmckkosmqouwqko->{$sysgmomuyiiawwcm} = $wkmckkosmqouwqko->{$gcegymooyemmaysk}; $wkmckkosmqouwqko->{$gcegymooyemmaysk} = $umkokecyamcwcqwe; cewmoqyysgsmuiya: scisgsyemmsekgos: } egyyiccaeeiooaua: igooksugieceoege: $ayegqaqygsqsmews = $wkmckkosmqouwqko; omqiayeucoioqoao: return $ayegqaqygsqsmews; } public function weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi) : string { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($mcaisukqqyosuasi); $muowmkwsoauukiag = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::gygsikewooaciecc); if (!($migiiksoiymissge && $ayegqaqygsqsmews && $muowmkwsoauukiag)) { goto ugqaaewwmkocwwgy; } $aaokuekaimigoyue = self::ocwoggikwceqsiuc($ayegqaqygsqsmews); $migiiksoiymissge .= "{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}"; ugqaaewwmkocwwgy: return trailingslashit($migiiksoiymissge); } public function ocwoggikwceqsiuc($ayegqaqygsqsmews) : ?string { if (!($aaokuekaimigoyue = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::qgwwgcuuykqagamk))) { goto wgewmqieuamsoayy; } $aaokuekaimigoyue = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wouqysuosmigaggy($aaokuekaimigoyue); wgewmqieuamsoayy: return $aaokuekaimigoyue; } public function ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); $ccamueccusigaaio = null; foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { if (!($ayegqaqygsqsmews->metakey === $gwiwsycaaqgwmewg)) { goto wakmayaoqoskekqy; } $ccamueccusigaaio = $ayegqaqygsqsmews; goto sggawugoykqcmsug; wakmayaoqoskekqy: wkeuuycukmuqiaom: } sggawugoykqcmsug: ueigkucgaucgeimc: } kqgcyoscsusgoaqi: return $ccamueccusigaaio; } public function comscwiqyuuesess($ccamueccusigaaio, $gwiwsycaaqgwmewg = null) : array { $agkmksicugiqcucq = []; $yygmoeguaqyumuui = [self::ouywiegeiyuaaawo, self::igecewwoemccgwsq, self::qgwwgcuuykqagamk, self::gygsikewooaciecc, self::uyqakoogaigomqmq, self::moegqsqomeumiomk, self::iycuamekoueuemoy]; if ($gwiwsycaaqgwmewg) { goto msemumccgceyugmg; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $agkmksicugiqcucq[] = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); eogwckcymuugikuy: } eeauyscekuckoues: mwsmsguqqkcwiiuk: } owmuceyswmgueasi: goto wagqgeqymeqoeuyi; msemumccgceyugmg: $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto qmuwoecuacmkwgem; } $agkmksicugiqcucq = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); qmuwoecuacmkwgem: wagqgeqymeqoeuyi: if (!$agkmksicugiqcucq) { goto qoqskyuuwueqkquk; } $agkmksicugiqcucq = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, $yygmoeguaqyumuui); qoqskyuuwueqkquk: return $agkmksicugiqcucq; } public function suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui = []) : array { $igqsaukqcqscimok = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($ayegqaqygsqsmews, [self::igecewwoemccgwsq, self::moegqsqomeumiomk])) { goto ciykoyeioqgyaeqo; } $igqsaukqcqscimok[self::ouywiegeiyuaaawo] = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!isset($ayegqaqygsqsmews->{$uusmaiomayssaecw})) { goto asiqwuoswmigcaki; } $igqsaukqcqscimok[$uusmaiomayssaecw] = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, $uusmaiomayssaecw); asiqwuoswmigcaki: wcugqegqsuuuwqao: } iwsuawwqomaowuii: ciykoyeioqgyaeqo: return $igqsaukqcqscimok; } public function gyykaeouuskoqiye($ccamueccusigaaio, $mcaisukqqyosuasi = null, string $aqykuigiuwmmcieu = OBJECT) : array { $agkmksicugiqcucq = []; if (!($oammesyieqmwuwyi = $this->iucouyoswwsakqyc($ccamueccusigaaio))) { goto oomguqikqokqwgku; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!(!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [self::ascagqcquwgmygkm, self::NAME, self::iccwcygaeqmomooo, self::igecewwoemccgwsq, self::gygsikewooaciecc]) && $igqsaukqcqscimok[self::iccwcygaeqmomooo])) { goto acsqgiuageaasiyy; } $iakkeikwceeomgyq = $igqsaukqcqscimok[self::igecewwoemccgwsq]; $eswwueuissckicww = $igqsaukqcqscimok[self::ascagqcquwgmygkm]; $qkkiukyyasyoeywi = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::iycuamekoueuemoy); $muowmkwsoauukiag = $igqsaukqcqscimok[self::gygsikewooaciecc]; if (!(is_null($mcaisukqqyosuasi) || $iakkeikwceeomgyq === $mcaisukqqyosuasi || $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi)) { goto mugqyyeayeyggqqk; } $gwiwsycaaqgwmewg = "{$iakkeikwceeomgyq}\137{$eswwueuissckicww}\x5f{$muowmkwsoauukiag}"; if ($aqykuigiuwmmcieu === OBJECT) { goto emmsycooskoqmgeg; } $agkmksicugiqcucq[$gwiwsycaaqgwmewg] = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::NAME, ''); goto ouamogymawucwswu; emmsycooskoqmgeg: $uusmaiomayssaecw = $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi ? $iakkeikwceeomgyq : $muowmkwsoauukiag; $igqsaukqcqscimok[self::moegqsqomeumiomk] = $gwiwsycaaqgwmewg; $agkmksicugiqcucq[$uusmaiomayssaecw][$eswwueuissckicww] = ConvertArray::kamisyecckmwywwo($igqsaukqcqscimok); ouamogymawucwswu: mugqyyeayeyggqqk: acsqgiuageaasiyy: qgeugwymkkiacwoc: } mqicocmqegwukkwg: oomguqikqokqwgku: return $this->ocksiywmkyaqseou("\162\145\154\x61\164\151\157\156\137\x76\141\x6c\151\x64\137\x69\x74\145\155\163", $agkmksicugiqcucq, $ccamueccusigaaio, $mcaisukqqyosuasi, $aqykuigiuwmmcieu); } public function woqgasgkqemiiseo($wkaqekwwgqsqwcoi, $qoiwmokisgikggia = self::PRIMARY) { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\x61\163\x73" => "\151\x63\157\156\x2d\170\x73\x20\x69\143\157\156\55{$qoiwmokisgikggia}"], [self::kicoscymgmgqeqgy => true]); } public function cmeuowkiswiuocqa() : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($this->woqgasgkqemiiseo(IconInterface::qcoowwoaocacqkuc), "\43", ["\143\154\141\163\x73" => "\150\x61\x6e\x64\154\x65\40\x72\x65\154\x61\x74\x69\x6f\x6e\55\150\141\156\144\x6c\x65\x20\146\x6c\157\141\x74\55\162\151\147\150\x74\x20\x70\x2d\61\x20\142\157\162\144\145\162\145\x64\40\162\x6f\x75\156\x64\x65\x64\x20\155\x72\55\x31"]); } public function amsaeiymyieqksqy($aokagokqyuysuksm) : string { $meqocwsecsywiiqs = __("\122\x65\155\157\166\145", PR__MDL__RELATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->icqkogwskuwscskk([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::PREFIX => "\162\145\155\x6f\x76\x65\x5f\162\145\x6c\141\164\x69\x6f\156\137{$aokagokqyuysuksm}", self::ssmskyqgcmeiayco => __("\x41\x72\145\x20\x79\157\165\x20\163\165\x72\x65\x20\171\x6f\165\40\167\141\x6e\x74\x20\x74\157\x20\162\x65\x6d\157\x76\x65\40\164\150\151\163\40\151\164\x65\x6d\x3f", PR__MDL__RELATION), "\142\x75\164\164\x6f\156\163" => [self::mosycwwoqguicaeo, ["\143\154\141\x73\163" => "\x72\145\154\141\164\151\x6f\x6e\x2d\x69\x74\x65\x6d\x2d\x72\x65\155\157\x76\x65\x20\x62\164\x6e\40\142\x74\156\55\160\162\151\x6d\x61\x72\x79", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], [self::ysskgssgwuwmqwym => ["\143\x6c\141\163\163" => "\160\162\x2d\x63\x6f\x6e\146\x69\162\155\141\142\x6c\145\55\x61\143\164\x69\157\x6e\x20\x66\154\157\x61\x74\x2d\162\x69\x67\x68\164\x20\x70\55\61\40\142\157\x72\144\145\162\x65\x64\x20\x72\x6f\165\156\144\x65\x64"], self::ELEMENT => "\141", self::ssmskyqgcmeiayco => $this->woqgasgkqemiiseo(IconInterface::ucomcyskmkiqysee, self::wyaqwomqwwaoiwas)]); } }
