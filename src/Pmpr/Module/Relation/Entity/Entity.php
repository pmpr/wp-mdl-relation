<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b74ddda33             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Container; use Pmpr\Module\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Container { const gsogeeomsuykagku = "\x72\x65\x6c\x61\x74\x69\157\156\137\163\x69\x64\x65"; const osaqscycewgywasc = "\x72\x65\154\141\x74\151\x6f\156\x5f\x74\x61\x72\147\145\164"; const gummygkewuamuwec = "\162\x65\x6c\x61\164\151\157\x6e\137\x6d\145\x74\141\137\153\145\x79"; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\x6e\x69\x74"], 0)->qcsmikeggeemccuu("\160\x61\x72\163\x65\x5f\x71\x75\145\162\x79", [$this, "\165\x75\161\x71\143\165\153\x63\x6b\x75\163\x63\157\x79\x61\x73"], 999)->qcsmikeggeemccuu("\x77\x6f\x6f\x63\x6f\155\x6d\145\x72\143\145\x5f\x70\x72\157\144\165\x63\164\x5f\161\x75\145\x72\171", [$this, "\x75\x75\161\161\143\x75\153\143\153\165\x73\143\x6f\171\x61\x73"], 999)->qcsmikeggeemccuu("\142\x65\146\x6f\x72\x65\x5f\165\160\144\141\164\145\x5f{$uusmaiomayssaecw}", [$this, "\151\141\163\171\x77\167\153\x67\165\171\141\165\151\171\167\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\x75\145\x72\x79\x5f\x76\141\x72\x73", [$this, "\x6d\165\x6f\x75\x6d\x67\155\x69\165\165\x6f\x61\x77\163\151\x77"])->cecaguuoecmccuse("\165\x70\x64\x61\x74\x65\137{$this->aakmagwggmkoiiyu()}\137\x69\x74\145\155\163\137\142\x79\137\155\x65\164\x61\153\145\x79", [$this, "\147\x69\155\x73\151\x69\x69\167\x69\141\x69\x71\143\151\151\143"], 10, 2)->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()), [$this, "\141\143\145\x6f\x63\x63\x73\x6b\143\x77\167\x6d\155\x67\171\161"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; if ($gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag())) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::iycuamekoueuemoy)) { $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); } } $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); } } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x73\x69\x64\x65\163" => [], Constants::cgiswgcumueqgcmw => 5, Constants::osocaqqumyuooqyo => '']); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\163\151\x64\145\163"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii[Constants::osocaqqumyuooqyo]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(self::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if ($ayegqaqygsqsmews) { $iakkeikwceeomgyq = $ayegqaqygsqsmews->{Constants::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{Constants::gygsikewooaciecc}; if ($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa)) { foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\151\155\151\x74" => $ywmkwiwkosakssii["\154\151\x6d\x69\164"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; } } $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; } return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, Constants::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, Constants::moegqsqomeumiomk); $muowmkwsoauukiag = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, Constants::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\x6d\x65\x74\x61\x6b\145\171", Constants::mgsccwumkcawaqcy, Constants::qayiiikwusguoask]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if (!$gqgemcmoicmgaqie) { global $wp_query; $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if ($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi) { return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\155\145\164\141\x4b\145\171", Constants::mgsccwumkcawaqcy, Constants::qayiiikwusguoask]); } } return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query) { $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if ($kkeqqkkkqwkocsyu) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, [Constants::aisguagukaewucii => Constants::gouqcwikiiygyasc]); if ($oammesyieqmwuwyi) { $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); } } } return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . Constants::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, bool $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); } return $this->iuygowkemiiwqmiw("\x6d\x65\164\x61\137\142\157\x78\137\164\141\x62\163", ["\x6d\145\164\141\x42\157\170\145\x73" => $uaqusiikkokccqou, Constants::mgsccwumkcawaqcy => "\43\162\145\x6c\141\x74\x69\x6f\156\55\163\x74\x75\146\146", Constants::emgcgiseaoouacge => $aiwgcyaewwagisoo], ["\x65\143\150\x6f" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6d\145\164\x61\x5f\x62\157\170", ["\155\145\164\141\x4b\x65\x79" => $gwiwsycaaqgwmewg, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::iockmgiyoygcswog => $igqsaukqcqscimok->ID, Constants::NAME => $ccamueccusigaaio->labels->singular_name, Constants::mgsccwumkcawaqcy => $ccamueccusigaaio->name, Constants::ENTITY => $this->aakmagwggmkoiiyu(), "\145\170\x63\154\x75\144\145\x73" => $icwicymcioeyeyek ? $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if (is_numeric($igqsaukqcqscimok)) { $aokagokqyuysuksm = $igqsaukqcqscimok; } else { if ($igqsaukqcqscimok instanceof WP_Term) { $aokagokqyuysuksm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Post) { $aokagokqyuysuksm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); } } } return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\173\x7d", "\151\x6e\x70\x75\x74\137\160\154\141\x63\145\x68\157\154\x64\145\162" => __("\x54\171\160\x65\x20\116\141\x6d\x65\40\x6f\x66\x20\x61\x20\x25\163", PR__MDL__RELATION), "\x6d\x6f\166\x65\x5f\150\141\156\x64\154\145" => $this->cmeuowkiswiuocqa(), "\162\145\155\157\x76\x65\137\155\x6f\x64\141\x6c" => $this->amsaeiymyieqksqy("\45\151\x64\45")]); return $nsmgceoqaqogqmuw; } public function aceoccskcwwmmgyq($wsqkgswwooewwekw, $amakmumgguksgmum) { if ($amakmumgguksgmum instanceof Setting) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $wsqkgswwooewwekw[$ymqmyyeuycgmigyo] = $amakmumgguksgmum->mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\x25\x73\40\x72\145\154\141\x74\x69\x6f\x6e\40\143\x6f\x6e\x66\151\x67\x75\162\141\x74\x69\x6f\156", PR__MDL__RELATION), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($amakmumgguksgmum->ycgeeoiieoiakgam("{$ymqmyyeuycgmigyo}\137\162\145\154\x61\x74\151\x6f\156\163")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\122\145\154\141\164\151\x6f\156\163", PR__MDL__RELATION))->ewweaossowcqywaw($this->ugmceccgwaaaigiy($amakmumgguksgmum))); } return $wsqkgswwooewwekw; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { return []; } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false); }
