<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             651959de4183c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Container; use Pmpr\Module\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Container { const gsogeeomsuykagku = "\162\145\154\x61\164\151\157\156\137\x73\x69\144\145"; const osaqscycewgywasc = "\162\x65\154\x61\164\151\x6f\x6e\x5f\164\x61\x72\x67\x65\164"; const gummygkewuamuwec = "\162\x65\x6c\141\164\151\157\x6e\137\155\x65\164\x61\137\x6b\145\171"; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x69\156\151\164"], 0)->qcsmikeggeemccuu("\160\x61\x72\163\145\137\161\x75\x65\162\x79", [$this, "\165\x75\x71\x71\143\x75\x6b\143\x6b\x75\x73\143\x6f\x79\x61\163"], 999)->qcsmikeggeemccuu("\167\x6f\157\143\157\x6d\155\x65\162\143\145\137\x70\x72\157\144\165\x63\x74\x5f\x71\165\x65\x72\171", [$this, "\165\165\161\161\143\165\153\143\x6b\165\163\143\157\171\141\x73"], 999)->qcsmikeggeemccuu("\142\145\x66\x6f\162\145\x5f\x75\x70\x64\x61\164\x65\x5f{$uusmaiomayssaecw}", [$this, "\x69\141\x73\x79\167\167\153\x67\x75\171\141\x75\151\x79\x77\165"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\145\162\171\137\x76\141\x72\163", [$this, "\x6d\165\157\165\155\x67\x6d\151\x75\x75\x6f\x61\x77\x73\x69\x77"])->cecaguuoecmccuse("\x75\x70\x64\141\164\145\x5f{$this->aakmagwggmkoiiyu()}\137\x69\x74\145\155\163\137\142\171\x5f\155\145\x74\x61\x6b\145\x79", [$this, "\x67\x69\x6d\x73\x69\151\x69\x77\151\x61\x69\161\143\x69\x69\x63"], 10, 2)->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()), [$this, "\x61\143\145\157\x63\143\163\153\143\x77\x77\155\x6d\x67\171\x71"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto cuoqqgaygogsmmic; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto ygkcacsyyckescqs; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); ygkcacsyyckescqs: qmeoaqmsuseueqiy: } ickcmqoiosquugwe: $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); cuoqqgaygogsmmic: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\163\x69\x64\x65\x73" => [], self::cgiswgcumueqgcmw => 5, self::osocaqqumyuooqyo => '']); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\163\x69\144\145\163"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii[self::osocaqqumyuooqyo]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(self::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto mqccmesakuemceqi; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto igymseewwyiocoug; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\x69\x6d\151\x74" => $ywmkwiwkosakssii["\154\x69\x6d\x69\164"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; sukskmcwsoysiuqu: } cgewcsueoyaeikgm: igymseewwyiocoug: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; mqccmesakuemceqi: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\145\x74\141\153\145\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto eyiamcekkgkiawqy; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; eyiamcekkgkiawqy: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto kooskuwkuayiuose; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto twkmiuomimomscew; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\x65\164\x61\x4b\x65\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); twkmiuomimomscew: kooskuwkuayiuose: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto yssscwioiyygssec; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto qcessicwuikwqsis; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, [self::aisguagukaewucii => self::gouqcwikiiygyasc]); if (!$oammesyieqmwuwyi) { goto qwcegcuowwgiccos; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); qwcegcuowwgiccos: qcessicwuikwqsis: yssscwioiyygssec: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, bool $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); coywmiyqgsweuiic: } ieumumsgyguceusy: return $this->iuygowkemiiwqmiw("\155\x65\164\x61\x5f\x62\x6f\x78\x5f\x74\x61\x62\163", ["\155\145\x74\141\102\157\170\x65\x73" => $uaqusiikkokccqou, self::mgsccwumkcawaqcy => "\43\162\145\154\141\x74\x69\x6f\156\55\163\164\x75\146\x66", self::emgcgiseaoouacge => $aiwgcyaewwagisoo], ["\x65\x63\x68\157" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\155\x65\164\x61\137\142\157\170", ["\155\145\x74\141\x4b\145\x79" => $gwiwsycaaqgwmewg, self::uiwqcumqkgikqyue => $icwicymcioeyeyek, self::iockmgiyoygcswog => $igqsaukqcqscimok->ID, self::NAME => $ccamueccusigaaio->labels->singular_name, self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::ENTITY => $this->aakmagwggmkoiiyu(), "\x65\x78\143\x6c\165\144\x65\x73" => $icwicymcioeyeyek ? $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto ycakugokkqkuqyiu; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto siqagquguiemuoku; } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); siqagquguiemuoku: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $aokagokqyuysuksm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($igqsaukqcqscimok); oouoqimaaqcmccay: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\x7b\175", "\x69\156\x70\165\164\137\160\x6c\x61\143\x65\x68\x6f\x6c\144\x65\162" => __("\124\x79\x70\x65\40\x4e\141\155\x65\x20\x6f\x66\40\141\x20\x25\163", PR__MDL__RELATION), "\x6d\157\x76\x65\x5f\150\x61\x6e\144\x6c\145" => $this->cmeuowkiswiuocqa(), "\x72\145\155\157\166\145\137\155\x6f\144\141\x6c" => $this->amsaeiymyieqksqy()]); return $nsmgceoqaqogqmuw; } public function aceoccskcwwmmgyq($wsqkgswwooewwekw, $amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof Setting) { goto sycygoiaiqqageym; } $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $wsqkgswwooewwekw[$ymqmyyeuycgmigyo] = $amakmumgguksgmum::mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\45\x73\40\x72\x65\154\141\164\151\157\156\x20\x63\157\x6e\x66\151\x67\165\x72\x61\x74\x69\157\156", PR__MDL__RELATION), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($amakmumgguksgmum::ycgeeoiieoiakgam("{$ymqmyyeuycgmigyo}\137\162\145\154\141\164\x69\157\x6e\x73")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\122\x65\154\x61\x74\151\x6f\156\163", PR__MDL__RELATION))->ewweaossowcqywaw($this->ugmceccgwaaaigiy($amakmumgguksgmum))); sycygoiaiqqageym: return $wsqkgswwooewwekw; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false); }
