<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e5112746e86             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Container; use Pmpr\Module\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Container { const gsogeeomsuykagku = "\162\x65\154\141\x74\151\x6f\156\x5f\x73\x69\144\145"; const osaqscycewgywasc = "\162\145\x6c\141\x74\151\157\156\x5f\164\141\162\147\x65\164"; const gummygkewuamuwec = "\x72\x65\x6c\141\164\151\157\x6e\x5f\155\145\x74\x61\x5f\x6b\x65\x79"; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\156\x69\164"], 0)->qcsmikeggeemccuu("\160\x61\162\x73\145\137\161\165\145\162\x79", [$this, "\165\x75\x71\x71\143\165\x6b\143\x6b\x75\163\143\157\171\x61\x73"], 999)->qcsmikeggeemccuu("\167\157\157\143\157\x6d\x6d\x65\162\143\145\x5f\160\162\157\x64\165\143\x74\137\x71\165\x65\x72\x79", [$this, "\165\165\x71\x71\x63\x75\x6b\x63\x6b\165\x73\x63\x6f\x79\141\163"], 999)->qcsmikeggeemccuu("\142\145\x66\x6f\x72\145\x5f\165\160\x64\x61\x74\145\137{$uusmaiomayssaecw}", [$this, "\x69\141\163\171\x77\167\153\147\x75\171\141\x75\151\171\167\165"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\x65\x72\171\x5f\166\x61\162\163", [$this, "\x6d\165\x6f\x75\x6d\147\155\151\165\165\x6f\141\167\163\151\x77"])->cecaguuoecmccuse("\165\x70\x64\x61\164\x65\x5f{$this->aakmagwggmkoiiyu()}\x5f\x69\x74\145\155\163\137\142\x79\137\155\145\164\141\153\x65\x79", [$this, "\x67\x69\155\163\151\x69\151\167\151\x61\x69\x71\x63\151\x69\x63"], 10, 2)->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()), [$this, "\x61\x63\145\x6f\x63\x63\x73\153\x63\x77\167\155\155\147\x79\x71"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; if (!($gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()))) { goto qcessicwuikwqsis; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto qwcegcuowwgiccos; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); qwcegcuowwgiccos: kooskuwkuayiuose: } twkmiuomimomscew: $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); qcessicwuikwqsis: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x73\151\x64\145\163" => [], self::cgiswgcumueqgcmw => 5, self::osocaqqumyuooqyo => '']); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\x73\x69\144\x65\x73"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii[self::osocaqqumyuooqyo]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(self::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto siqagquguiemuoku; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto coywmiyqgsweuiic; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\154\151\x6d\151\x74" => $ywmkwiwkosakssii["\154\151\x6d\151\164"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; ieumumsgyguceusy: } yssscwioiyygssec: coywmiyqgsweuiic: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; siqagquguiemuoku: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\x6d\x65\x74\141\153\145\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto ycakugokkqkuqyiu; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; ycakugokkqkuqyiu: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto sycygoiaiqqageym; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto oouoqimaaqcmccay; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\145\x74\141\113\145\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); oouoqimaaqcmccay: sycygoiaiqqageym: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto wwkgkaecgiwggcck; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto kciouyuaqkyqomam; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, [self::aisguagukaewucii => self::gouqcwikiiygyasc]); if (!$oammesyieqmwuwyi) { goto gygawoqywkukmqee; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); gygawoqywkukmqee: kciouyuaqkyqomam: wwkgkaecgiwggcck: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, bool $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); qsygcycwieukkgwc: } umgaesggesswoaqe: return $this->iuygowkemiiwqmiw("\x6d\145\x74\x61\137\142\x6f\170\137\x74\x61\142\163", ["\155\x65\x74\x61\102\x6f\x78\145\163" => $uaqusiikkokccqou, self::mgsccwumkcawaqcy => "\43\x72\x65\154\141\164\x69\x6f\156\x2d\163\164\x75\146\146", self::emgcgiseaoouacge => $aiwgcyaewwagisoo], ["\x65\143\150\157" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\155\x65\x74\x61\x5f\142\157\x78", ["\155\145\164\141\113\145\171" => $gwiwsycaaqgwmewg, self::uiwqcumqkgikqyue => $icwicymcioeyeyek, self::iockmgiyoygcswog => $igqsaukqcqscimok->ID, self::NAME => $ccamueccusigaaio->labels->singular_name, self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::ENTITY => $this->aakmagwggmkoiiyu(), "\x65\x78\143\x6c\165\144\145\x73" => $icwicymcioeyeyek ? $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if (is_numeric($igqsaukqcqscimok)) { goto gimmuoqwckiseaik; } if ($igqsaukqcqscimok instanceof WP_Term) { goto quwcqmyokicssyew; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto kiwqkcaekqqyuegq; } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); kiwqkcaekqqyuegq: goto iqcogmsguwoikame; quwcqmyokicssyew: $aokagokqyuysuksm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($igqsaukqcqscimok); iqcogmsguwoikame: goto cmqucgoewuyieoyk; gimmuoqwckiseaik: $aokagokqyuysuksm = $igqsaukqcqscimok; cmqucgoewuyieoyk: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\173\x7d", "\x69\156\160\x75\164\x5f\x70\154\x61\143\x65\x68\x6f\x6c\x64\145\162" => __("\124\x79\160\145\40\x4e\x61\155\145\x20\157\146\x20\141\x20\x25\163", PR__MDL__RELATION), "\x6d\157\x76\145\137\150\x61\156\144\x6c\x65" => $this->cmeuowkiswiuocqa(), "\162\145\x6d\x6f\x76\145\137\155\157\x64\141\x6c" => $this->amsaeiymyieqksqy("\45\x69\144\45")]); return $nsmgceoqaqogqmuw; } public function aceoccskcwwmmgyq($wsqkgswwooewwekw, $amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof Setting) { goto yqykqysmiquwoasu; } $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $wsqkgswwooewwekw[$ymqmyyeuycgmigyo] = $amakmumgguksgmum->mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\45\163\x20\162\x65\x6c\141\x74\151\x6f\156\x20\143\x6f\156\x66\x69\x67\165\162\x61\x74\151\157\x6e", PR__MDL__RELATION), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($amakmumgguksgmum->ycgeeoiieoiakgam("{$ymqmyyeuycgmigyo}\x5f\x72\x65\154\x61\x74\x69\x6f\156\163")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\122\x65\x6c\141\x74\151\x6f\156\x73", PR__MDL__RELATION))->ewweaossowcqywaw($this->ugmceccgwaaaigiy($amakmumgguksgmum))); yqykqysmiquwoasu: return $wsqkgswwooewwekw; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false); }
