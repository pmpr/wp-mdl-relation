<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6575ec132fc23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Container; use Pmpr\Module\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Container { const gsogeeomsuykagku = "\x72\x65\x6c\141\164\151\x6f\x6e\x5f\x73\x69\x64\x65"; const osaqscycewgywasc = "\162\x65\x6c\x61\164\x69\x6f\x6e\137\x74\141\162\x67\x65\x74"; const gummygkewuamuwec = "\x72\x65\154\x61\x74\x69\x6f\156\x5f\155\x65\x74\x61\x5f\153\x65\x79"; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x69\156\151\x74"], 0)->qcsmikeggeemccuu("\x70\x61\x72\x73\x65\x5f\161\165\x65\162\171", [$this, "\x75\x75\161\x71\143\165\x6b\x63\153\165\163\x63\157\171\141\163"], 999)->qcsmikeggeemccuu("\167\157\157\143\157\x6d\155\x65\x72\x63\145\137\x70\x72\x6f\144\x75\143\164\137\161\165\145\x72\x79", [$this, "\x75\165\161\161\x63\165\153\143\x6b\165\163\x63\157\x79\141\x73"], 999)->qcsmikeggeemccuu("\142\145\x66\157\x72\145\137\165\x70\144\141\x74\x65\137{$uusmaiomayssaecw}", [$this, "\x69\141\163\x79\x77\x77\153\x67\165\x79\141\165\x69\x79\x77\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\165\145\162\x79\137\x76\141\162\x73", [$this, "\155\x75\x6f\x75\155\147\x6d\151\165\165\157\141\x77\x73\x69\167"])->cecaguuoecmccuse("\165\160\x64\x61\164\145\137{$this->aakmagwggmkoiiyu()}\137\x69\x74\145\x6d\x73\x5f\142\x79\x5f\155\x65\164\x61\153\x65\171", [$this, "\x67\x69\155\x73\x69\x69\x69\x77\151\x61\x69\161\143\151\151\x63"], 10, 2)->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()), [$this, "\141\x63\145\157\x63\143\x73\153\x63\x77\x77\x6d\x6d\147\x79\161"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; if (!($gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()))) { goto eequksumcoogyoem; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto sqiciiuwmykocycc; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); sqiciiuwmykocycc: iomcaiwewsawiamu: } kiqogmwcgcamwiig: $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); eequksumcoogyoem: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\163\151\144\x65\163" => [], self::cgiswgcumueqgcmw => 5, self::osocaqqumyuooqyo => '']); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\x73\151\144\145\x73"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii[self::osocaqqumyuooqyo]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(self::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto yiwiqaqmwiogawym; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto ocokwuuquaokmasc; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\x69\155\151\164" => $ywmkwiwkosakssii["\x6c\151\155\151\x74"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; cggowoquuiwqkyew: } uukumskkeggaowck: ocokwuuquaokmasc: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; yiwiqaqmwiogawym: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = $gkyciwoiiisgywcs->get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\145\x74\x61\x6b\x65\171", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto goacqqsgaaigyuaw; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; goacqqsgaaigyuaw: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto wcesymwqykqoyuqk; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto meawswgwagoqgkye; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\155\145\164\x61\113\145\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); meawswgwagoqgkye: wcesymwqykqoyuqk: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto egasokooagakisiy; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto mswsoaimesegiiic; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, [self::aisguagukaewucii => self::gouqcwikiiygyasc]); if (!$oammesyieqmwuwyi) { goto usqgaogkqgemuima; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); usqgaogkqgemuima: mswsoaimesegiiic: egasokooagakisiy: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, bool $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); qgegkeomwscwwiuw: } kecwuwwcwokuksyq: return $this->iuygowkemiiwqmiw("\155\x65\x74\x61\x5f\x62\157\x78\x5f\x74\x61\142\163", ["\155\x65\164\x61\x42\157\170\x65\x73" => $uaqusiikkokccqou, self::mgsccwumkcawaqcy => "\x23\162\x65\x6c\x61\x74\151\x6f\x6e\55\163\x74\165\x66\146", self::emgcgiseaoouacge => $aiwgcyaewwagisoo], ["\145\143\x68\x6f" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6d\145\164\141\137\x62\x6f\x78", ["\x6d\x65\164\x61\113\145\171" => $gwiwsycaaqgwmewg, self::uiwqcumqkgikqyue => $icwicymcioeyeyek, self::iockmgiyoygcswog => $igqsaukqcqscimok->ID, self::NAME => $ccamueccusigaaio->labels->singular_name, self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::ENTITY => $this->aakmagwggmkoiiyu(), "\145\x78\x63\x6c\165\144\x65\x73" => $icwicymcioeyeyek ? $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if (is_numeric($igqsaukqcqscimok)) { goto ickcmqoiosquugwe; } if ($igqsaukqcqscimok instanceof WP_Term) { goto goeoymmqqqeeoime; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto qmiwsequckckoaei; } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); qmiwsequckckoaei: goto eiawsoasmscmqswa; goeoymmqqqeeoime: $aokagokqyuysuksm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($igqsaukqcqscimok); eiawsoasmscmqswa: goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $aokagokqyuysuksm = $igqsaukqcqscimok; qmeoaqmsuseueqiy: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\x7b\175", "\151\x6e\160\165\x74\137\160\x6c\x61\x63\x65\x68\x6f\154\144\145\162" => __("\x54\171\160\x65\x20\x4e\x61\155\145\x20\x6f\146\x20\141\x20\45\163", PR__MDL__RELATION), "\x6d\x6f\x76\145\137\150\x61\x6e\x64\154\x65" => $this->cmeuowkiswiuocqa(), "\162\x65\155\x6f\166\x65\x5f\x6d\157\x64\141\154" => $this->amsaeiymyieqksqy("\x25\151\x64\x25")]); return $nsmgceoqaqogqmuw; } public function aceoccskcwwmmgyq($wsqkgswwooewwekw, $amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof Setting) { goto ygkcacsyyckescqs; } $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $wsqkgswwooewwekw[$ymqmyyeuycgmigyo] = $amakmumgguksgmum->mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\45\163\x20\162\145\154\141\x74\151\157\156\40\143\157\156\x66\151\x67\165\x72\x61\x74\151\157\156", PR__MDL__RELATION), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($amakmumgguksgmum->ycgeeoiieoiakgam("{$ymqmyyeuycgmigyo}\137\162\x65\154\141\164\x69\x6f\156\163")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\122\145\154\141\x74\x69\157\156\163", PR__MDL__RELATION))->ewweaossowcqywaw($this->ugmceccgwaaaigiy($amakmumgguksgmum))); ygkcacsyyckescqs: return $wsqkgswwooewwekw; } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false); }
