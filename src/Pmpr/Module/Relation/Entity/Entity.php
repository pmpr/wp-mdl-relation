<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e4245c3b91             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Container; use Pmpr\Module\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Container { const gsogeeomsuykagku = "\162\x65\x6c\141\164\151\157\156\137\x73\x69\144\145"; const osaqscycewgywasc = "\x72\x65\154\x61\164\x69\x6f\x6e\x5f\x74\x61\162\147\145\164"; const gummygkewuamuwec = "\162\145\x6c\141\164\x69\157\156\x5f\155\x65\x74\141\137\153\145\171"; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\151\156\x69\164"], 0)->qcsmikeggeemccuu("\x70\x61\162\163\145\137\x71\165\145\162\171", [$this, "\165\x75\161\161\143\x75\x6b\x63\153\x75\x73\x63\x6f\171\141\163"], 999)->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\155\155\x65\162\143\x65\x5f\x70\x72\x6f\144\165\x63\x74\x5f\161\x75\x65\x72\x79", [$this, "\x75\165\161\x71\x63\x75\153\143\153\x75\x73\143\x6f\171\x61\x73"], 999)->qcsmikeggeemccuu("\142\145\x66\x6f\x72\145\x5f\165\160\144\141\164\145\x5f{$uusmaiomayssaecw}", [$this, "\151\x61\x73\x79\167\x77\x6b\147\x75\x79\141\165\151\171\x77\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\165\x65\x72\x79\x5f\x76\141\x72\163", [$this, "\x6d\x75\x6f\165\x6d\147\x6d\151\165\165\157\141\167\x73\151\x77"])->cecaguuoecmccuse("\165\160\x64\141\x74\x65\x5f{$this->aakmagwggmkoiiyu()}\137\151\x74\145\x6d\x73\x5f\x62\x79\x5f\155\x65\x74\x61\x6b\x65\171", [$this, "\x67\x69\155\163\x69\x69\x69\x77\151\141\151\x71\143\x69\151\x63"], 10, 2)->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()), [$this, "\x61\143\145\157\x63\x63\x73\x6b\143\167\167\155\155\147\x79\161"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; if (!($gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()))) { goto yssscwioiyygssec; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto qcessicwuikwqsis; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); yssscwioiyygssec: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\163\x69\x64\x65\x73" => [], self::cgiswgcumueqgcmw => 5, self::osocaqqumyuooqyo => '']); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\163\151\144\x65\163"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii[self::osocaqqumyuooqyo]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(self::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto ycakugokkqkuqyiu; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto siqagquguiemuoku; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\154\x69\x6d\151\x74" => $ywmkwiwkosakssii["\x6c\x69\x6d\x69\x74"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; coywmiyqgsweuiic: } ieumumsgyguceusy: siqagquguiemuoku: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; ycakugokkqkuqyiu: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\145\164\x61\153\145\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto oouoqimaaqcmccay; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; oouoqimaaqcmccay: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto gygawoqywkukmqee; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto sycygoiaiqqageym; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\155\x65\164\141\x4b\x65\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); sycygoiaiqqageym: gygawoqywkukmqee: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto umgaesggesswoaqe; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto wwkgkaecgiwggcck; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, [self::aisguagukaewucii => self::gouqcwikiiygyasc]); if (!$oammesyieqmwuwyi) { goto kciouyuaqkyqomam; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); kciouyuaqkyqomam: wwkgkaecgiwggcck: umgaesggesswoaqe: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, bool $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); kiwqkcaekqqyuegq: } qsygcycwieukkgwc: return $this->iuygowkemiiwqmiw("\155\x65\x74\141\137\142\157\170\137\164\x61\x62\163", ["\155\145\164\x61\x42\157\170\x65\x73" => $uaqusiikkokccqou, self::mgsccwumkcawaqcy => "\x23\x72\x65\154\x61\164\x69\x6f\156\55\163\x74\x75\146\x66", self::emgcgiseaoouacge => $aiwgcyaewwagisoo], ["\x65\143\x68\x6f" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6d\145\164\141\x5f\x62\x6f\170", ["\155\145\164\141\x4b\x65\x79" => $gwiwsycaaqgwmewg, self::uiwqcumqkgikqyue => $icwicymcioeyeyek, self::iockmgiyoygcswog => $igqsaukqcqscimok->ID, self::NAME => $ccamueccusigaaio->labels->singular_name, self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::ENTITY => $this->aakmagwggmkoiiyu(), "\145\170\x63\154\165\x64\x65\163" => $icwicymcioeyeyek ? $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if (is_numeric($igqsaukqcqscimok)) { goto cmqucgoewuyieoyk; } if ($igqsaukqcqscimok instanceof WP_Term) { goto iqcogmsguwoikame; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto quwcqmyokicssyew; } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); quwcqmyokicssyew: goto gimmuoqwckiseaik; iqcogmsguwoikame: $aokagokqyuysuksm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($igqsaukqcqscimok); gimmuoqwckiseaik: goto yqykqysmiquwoasu; cmqucgoewuyieoyk: $aokagokqyuysuksm = $igqsaukqcqscimok; yqykqysmiquwoasu: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\x7b\175", "\x69\x6e\160\x75\164\137\x70\154\x61\x63\x65\150\157\154\x64\145\162" => __("\124\x79\x70\x65\40\x4e\x61\x6d\x65\40\x6f\x66\x20\x61\40\x25\163", PR__MDL__RELATION), "\x6d\157\166\145\x5f\150\x61\x6e\x64\x6c\x65" => $this->cmeuowkiswiuocqa(), "\x72\x65\x6d\x6f\166\x65\137\155\x6f\144\141\x6c" => $this->amsaeiymyieqksqy("\45\151\144\x25")]); return $nsmgceoqaqogqmuw; } public function aceoccskcwwmmgyq($wsqkgswwooewwekw, $amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof Setting) { goto ayyweymyuuiauamo; } $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $wsqkgswwooewwekw[$ymqmyyeuycgmigyo] = $amakmumgguksgmum->mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\45\163\x20\162\x65\x6c\x61\x74\x69\x6f\x6e\40\x63\x6f\x6e\x66\x69\147\x75\x72\x61\x74\151\157\x6e", PR__MDL__RELATION), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($amakmumgguksgmum->ycgeeoiieoiakgam("{$ymqmyyeuycgmigyo}\x5f\162\x65\154\141\164\x69\157\156\163")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\122\145\x6c\141\164\x69\157\156\x73", PR__MDL__RELATION))->ewweaossowcqywaw($this->ugmceccgwaaaigiy($amakmumgguksgmum))); ayyweymyuuiauamo: return $wsqkgswwooewwekw; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false); }
