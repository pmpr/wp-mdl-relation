<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977dbfed345             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use stdClass; abstract class Container extends BaseClass { const esgskoesuqecuuwg = "\x72\145\154\141\x74\151\157\156\x5f"; const ggsoiqkcasskkeae = "\x70\157\x73\x74\137\x5f\151\x6e\x5f\162\145\x6c\x61\164\x69\157\156"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function iucouyoswwsakqyc($ccamueccusigaaio) : array { $oammesyieqmwuwyi = []; $cmaccwokqweqweqi = $this->weysguygiseoukqw($ccamueccusigaaio, []); foreach ($cmaccwokqweqweqi as $igqsaukqcqscimok) { if (!($uusmaiomayssaecw = ManipulateArray::get($igqsaukqcqscimok, self::ascagqcquwgmygkm))) { goto ewymsmkkiksgwysk; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; ewymsmkkiksgwysk: giaacoqqqsekcayy: } syiqkaasoueowwui: return $oammesyieqmwuwyi; } public function ggiqwoiwqoieoeqe($ayegqaqygsqsmews) { if (!$ayegqaqygsqsmews) { goto egyyiccaeeiooaua; } $wkmckkosmqouwqko = clone $ayegqaqygsqsmews; if (!$wkmckkosmqouwqko instanceof stdClass) { goto ooeausyowguqicuo; } $gmawcgiwcmsukeiu = [self::igecewwoemccgwsq => self::gygsikewooaciecc, self::qgwwgcuuykqagamk => self::uyqakoogaigomqmq]; foreach ($gmawcgiwcmsukeiu as $sysgmomuyiiawwcm => $gcegymooyemmaysk) { if (!isset($wkmckkosmqouwqko->{$sysgmomuyiiawwcm}, $wkmckkosmqouwqko->{$gcegymooyemmaysk})) { goto gkyawqqcmigqgaiq; } $umkokecyamcwcqwe = $wkmckkosmqouwqko->{$sysgmomuyiiawwcm}; $wkmckkosmqouwqko->{$sysgmomuyiiawwcm} = $wkmckkosmqouwqko->{$gcegymooyemmaysk}; $wkmckkosmqouwqko->{$gcegymooyemmaysk} = $umkokecyamcwcqwe; gkyawqqcmigqgaiq: wmywuusgukmmaams: } cmegwsegsosyqcai: ooeausyowguqicuo: $ayegqaqygsqsmews = $wkmckkosmqouwqko; egyyiccaeeiooaua: return $ayegqaqygsqsmews; } public function weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi) : string { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mcaisukqqyosuasi); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); if (!($migiiksoiymissge && $ayegqaqygsqsmews && $muowmkwsoauukiag)) { goto scisgsyemmsekgos; } $aaokuekaimigoyue = self::ocwoggikwceqsiuc($ayegqaqygsqsmews); $migiiksoiymissge .= "{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}"; scisgsyemmsekgos: return trailingslashit($migiiksoiymissge); } public static function ocwoggikwceqsiuc($ayegqaqygsqsmews) : ?string { $aaokuekaimigoyue = ManipulateArray::get($ayegqaqygsqsmews, self::qgwwgcuuykqagamk); if (!$aaokuekaimigoyue) { goto cewmoqyysgsmuiya; } $aaokuekaimigoyue = DecoratorSanitize::wouqysuosmigaggy($aaokuekaimigoyue); cewmoqyysgsmuiya: return $aaokuekaimigoyue; } public function ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); $ccamueccusigaaio = null; foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { if (!($ayegqaqygsqsmews->metakey === $gwiwsycaaqgwmewg)) { goto kqgcyoscsusgoaqi; } $ccamueccusigaaio = $ayegqaqygsqsmews; goto ugqaaewwmkocwwgy; kqgcyoscsusgoaqi: wgewmqieuamsoayy: } ugqaaewwmkocwwgy: omqiayeucoioqoao: } igooksugieceoege: return $ccamueccusigaaio; } public function comscwiqyuuesess($ccamueccusigaaio, $gwiwsycaaqgwmewg = null) { $agkmksicugiqcucq = []; $yygmoeguaqyumuui = [self::ouywiegeiyuaaawo, self::igecewwoemccgwsq, self::qgwwgcuuykqagamk, self::gygsikewooaciecc, self::uyqakoogaigomqmq, self::moegqsqomeumiomk, self::iycuamekoueuemoy]; if ($gwiwsycaaqgwmewg) { goto owmuceyswmgueasi; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $agkmksicugiqcucq[] = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); qmuwoecuacmkwgem: } wakmayaoqoskekqy: wkeuuycukmuqiaom: } sggawugoykqcmsug: goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto ueigkucgaucgeimc; } $agkmksicugiqcucq = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); ueigkucgaucgeimc: mwsmsguqqkcwiiuk: if (!$agkmksicugiqcucq) { goto eeauyscekuckoues; } $agkmksicugiqcucq = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, $yygmoeguaqyumuui); eeauyscekuckoues: return $agkmksicugiqcucq; } public function suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui = []) : array { $igqsaukqcqscimok = []; if (ManipulateArray::uuegkqwagymmusiy($ayegqaqygsqsmews, [self::igecewwoemccgwsq, self::moegqsqomeumiomk])) { goto qoqskyuuwueqkquk; } $igqsaukqcqscimok[self::ouywiegeiyuaaawo] = self::ocwoggikwceqsiuc($ayegqaqygsqsmews); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!isset($ayegqaqygsqsmews->{$uusmaiomayssaecw})) { goto wagqgeqymeqoeuyi; } $igqsaukqcqscimok[$uusmaiomayssaecw] = ManipulateArray::get($ayegqaqygsqsmews, $uusmaiomayssaecw); wagqgeqymeqoeuyi: msemumccgceyugmg: } eogwckcymuugikuy: qoqskyuuwueqkquk: return $igqsaukqcqscimok; } public function gyykaeouuskoqiye($ccamueccusigaaio, $mcaisukqqyosuasi = null, string $aqykuigiuwmmcieu = OBJECT) : array { $agkmksicugiqcucq = []; if (!($oammesyieqmwuwyi = $this->iucouyoswwsakqyc($ccamueccusigaaio))) { goto emmsycooskoqmgeg; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!(!ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::ascagqcquwgmygkm, self::NAME, self::iccwcygaeqmomooo, self::igecewwoemccgwsq, self::gygsikewooaciecc]) && $igqsaukqcqscimok[self::iccwcygaeqmomooo])) { goto qgeugwymkkiacwoc; } $iakkeikwceeomgyq = $igqsaukqcqscimok[self::igecewwoemccgwsq]; $eswwueuissckicww = $igqsaukqcqscimok[self::ascagqcquwgmygkm]; $qkkiukyyasyoeywi = ManipulateArray::get($igqsaukqcqscimok, self::iycuamekoueuemoy); $muowmkwsoauukiag = $igqsaukqcqscimok[self::gygsikewooaciecc]; if (!(is_null($mcaisukqqyosuasi) || $iakkeikwceeomgyq === $mcaisukqqyosuasi || $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi)) { goto mqicocmqegwukkwg; } $gwiwsycaaqgwmewg = "{$iakkeikwceeomgyq}\x5f{$eswwueuissckicww}\x5f{$muowmkwsoauukiag}"; if ($aqykuigiuwmmcieu === OBJECT) { goto asiqwuoswmigcaki; } $agkmksicugiqcucq[$gwiwsycaaqgwmewg] = ManipulateArray::get($igqsaukqcqscimok, self::NAME, ''); goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $uusmaiomayssaecw = $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi ? $iakkeikwceeomgyq : $muowmkwsoauukiag; $igqsaukqcqscimok[self::moegqsqomeumiomk] = $gwiwsycaaqgwmewg; $agkmksicugiqcucq[$uusmaiomayssaecw][$eswwueuissckicww] = ConvertArray::kamisyecckmwywwo($igqsaukqcqscimok); ciykoyeioqgyaeqo: mqicocmqegwukkwg: qgeugwymkkiacwoc: wcugqegqsuuuwqao: } iwsuawwqomaowuii: emmsycooskoqmgeg: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\145\x6c\x61\164\151\157\x6e\x5f\x76\141\x6c\151\x64\x5f\x69\x74\x65\155\163"), $agkmksicugiqcucq, $ccamueccusigaaio, $mcaisukqqyosuasi, $aqykuigiuwmmcieu); } public function woqgasgkqemiiseo($wkaqekwwgqsqwcoi, $qoiwmokisgikggia = self::PRIMARY) { return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\x61\163\163" => "\x69\x63\x6f\x6e\55\163\155\40\x66\x75\154\x6c\x2d\x6f\x70\141\x63\151\x74\x79\x20\x69\143\157\156\55{$qoiwmokisgikggia}"], ["\155\141\x72\x6b\x75\x70" => true]); } public function cmeuowkiswiuocqa() : string { return ManipulateHTML::yuawgssgauywkiia($this->woqgasgkqemiiseo(IconInterface::qcoowwoaocacqkuc), "\43", ["\143\154\x61\163\x73" => "\x68\x61\156\x64\x6c\x65\x20\162\x65\154\x61\x74\x69\157\x6e\x2d\150\x61\156\144\x6c\145\x20\x66\154\157\x61\x74\x2d\x72\x69\147\150\164\40\x70\55\61\x20\142\x6f\162\144\x65\162\145\144\x20\x72\157\x75\x6e\144\x65\x64\x20\155\162\x2d\61"]); } public function amsaeiymyieqksqy() : string { $meqocwsecsywiiqs = __("\122\x65\x6d\x6f\x76\x65", PR__MDL__RELATION); return ManipulateHTML::icqkogwskuwscskk([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::PREFIX => "\162\x65\x6d\x6f\166\145\x5f\162\x65\154\x61\x74\151\x6f\x6e", self::ssmskyqgcmeiayco => __("\x41\x72\145\x20\x79\x6f\165\x20\163\165\x72\x65\x20\171\157\x75\40\167\141\x6e\164\x20\x74\x6f\40\x72\145\155\x6f\166\145\x20\x74\x68\x69\x73\x20\151\164\x65\155\x3f", PR__MDL__RELATION), "\x62\165\164\x74\157\x6e\163" => [self::mosycwwoqguicaeo, ["\x63\x6c\141\x73\x73" => "\162\145\x6c\141\164\151\157\x6e\55\x69\x74\x65\x6d\x2d\x72\145\155\x6f\166\145\x20\x62\164\x6e\x20\x62\164\156\55\160\x72\151\x6d\x61\162\171", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], [self::ysskgssgwuwmqwym => ["\143\154\x61\163\x73" => "\160\x72\x2d\143\x6f\156\146\151\x72\155\x61\x62\x6c\145\x2d\141\143\x74\x69\x6f\x6e\40\146\154\x6f\141\164\x2d\x72\151\x67\x68\x74\40\x70\55\x31\x20\142\x6f\x72\x64\x65\x72\x65\x64\x20\x72\x6f\165\x6e\x64\145\x64"], self::ELEMENT => "\141", self::ssmskyqgcmeiayco => $this->woqgasgkqemiiseo(IconInterface::ucomcyskmkiqysee, self::wyaqwomqwwaoiwas)]); } }
