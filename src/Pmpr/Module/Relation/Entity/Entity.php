<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977dbfed345             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Container; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Container { const gsogeeomsuykagku = "\162\145\154\x61\164\x69\x6f\x6e\137\x73\151\144\x65"; const osaqscycewgywasc = "\x72\145\x6c\x61\164\151\x6f\156\x5f\x74\141\162\x67\145\x74"; const gummygkewuamuwec = "\x72\x65\x6c\x61\x74\151\157\156\137\155\145\164\x61\x5f\153\x65\171"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\x6e\x69\164"], 0)->qcsmikeggeemccuu("\x70\x61\x72\x73\x65\x5f\161\x75\145\162\x79", [$this, "\165\165\x71\161\x63\x75\x6b\x63\x6b\165\x73\x63\157\171\x61\x73"], 999)->qcsmikeggeemccuu("\x77\157\x6f\143\157\155\155\145\x72\x63\x65\x5f\x70\162\x6f\144\165\143\x74\x5f\161\x75\145\x72\171", [$this, "\165\165\161\161\143\x75\153\x63\x6b\x75\163\x63\157\x79\x61\x73"], 999)->qcsmikeggeemccuu("\x62\x65\146\157\162\145\137\165\x70\x64\x61\x74\x65\x5f{$uusmaiomayssaecw}", [$this, "\151\141\163\x79\x77\167\x6b\x67\165\171\x61\165\x69\x79\x77\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\x75\x65\162\171\137\166\141\162\163", [$this, "\155\165\x6f\x75\x6d\147\155\151\165\x75\157\x61\x77\163\151\167"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()}\137\x74\x61\x62\x73"), [$this, "\163\x77\141\x71\x6d\161\141\141\x73\x73\155\x67\x6d\x67\x67\x61"])->cecaguuoecmccuse("\x75\160\144\141\164\145\137{$this->aakmagwggmkoiiyu()}\x5f\x69\x74\x65\x6d\x73\x5f\x62\x79\x5f\x6d\145\164\x61\153\145\x79", [$this, "\x67\151\155\x73\x69\x69\x69\x77\x69\x61\x69\161\x63\x69\151\143"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto csscmcacoikwsecs; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!ManipulateArray::get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto asmecuqiyyswueqe; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); asmecuqiyyswueqe: myoicgcuugciueis: } qwigomakwmyiwkgo: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); csscmcacoikwsecs: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\155\145\x74\x61\x5f\x6b\x65\x79" => '', "\x73\x69\144\x65\163" => [], "\154\151\x6d\x69\x74" => 5]); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\x73\x69\144\x65\163"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\155\145\x74\141\x5f\153\x65\171"]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(self::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto sciwggaeogcoesiu; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto mkwskuycuyguqqok; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\151\155\x69\164" => $ywmkwiwkosakssii["\x6c\x69\155\x69\x74"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; kuicqywysciceggs: } cuykwgmswkskqkyi: mkwskuycuyguqqok: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; sciwggaeogcoesiu: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $aaokuekaimigoyue = self::ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\x65\164\141\x6b\145\171", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto eqkauqciwewmgeoi; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; eqkauqciwewmgeoi: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto yowsmsiyimmimemc; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto kwagwqyusyiyoaqs; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\145\164\141\x4b\145\x79", self::mgsccwumkcawaqcy, self::qayiiikwusguoask]); kwagwqyusyiyoaqs: yowsmsiyimmimemc: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto sqiciiuwmykocycc; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto iomcaiwewsawiamu; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, [self::aisguagukaewucii => self::gouqcwikiiygyasc]); if (!$oammesyieqmwuwyi) { goto kiqogmwcgcamwiig; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); kiqogmwcgcamwiig: iomcaiwewsawiamu: sqiciiuwmykocycc: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); uukumskkeggaowck: } eequksumcoogyoem: return $this->iuygowkemiiwqmiw("\155\x65\164\141\137\142\157\x78\x5f\164\x61\x62\163", ["\155\145\x74\x61\102\x6f\170\x65\163" => $uaqusiikkokccqou, self::mgsccwumkcawaqcy => "\43\162\x65\154\x61\164\x69\157\156\x2d\x73\164\x75\146\x66", self::emgcgiseaoouacge => $aiwgcyaewwagisoo], ["\145\143\x68\157" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\155\x65\164\141\137\x62\157\170", ["\x6d\x65\164\x61\113\145\x79" => $gwiwsycaaqgwmewg, self::uiwqcumqkgikqyue => $icwicymcioeyeyek, self::iockmgiyoygcswog => $igqsaukqcqscimok->ID, self::NAME => $ccamueccusigaaio->labels->singular_name, self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::ENTITY => $this->aakmagwggmkoiiyu(), "\x65\170\143\x6c\x75\x64\145\x73" => $icwicymcioeyeyek ? ManipulateString::wegeuqkaeuusoike(array_map(static function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto ocokwuuquaokmasc; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto cggowoquuiwqkyew; } $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); cggowoquuiwqkyew: goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); yiwiqaqmwiogawym: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\173\175", "\x69\156\x70\165\x74\137\160\x6c\x61\143\x65\x68\157\154\144\145\162" => __("\x54\171\160\145\40\x4e\x61\155\x65\40\x6f\x66\x20\141\40\45\x73", PR__MDL__RELATION), "\155\x6f\x76\x65\137\150\141\x6e\144\154\x65" => $this->cmeuowkiswiuocqa(), "\x72\x65\155\157\166\x65\x5f\x6d\157\x64\x61\x6c" => $this->amsaeiymyieqksqy()]); return $nsmgceoqaqogqmuw; } public function swaqmqaassmgmgga($ywoucyskcquysiwc) { $ywoucyskcquysiwc[] = self::sgsmqaoowiyocqaa(self::esgskoesuqecuuwg . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\x5f\162\145\x6c\x61\x74\151\x6f\x6e\x73", __("\x52\145\x6c\141\x74\151\157\x6e\163", PR__MDL__RELATION))->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak(IconInterface::emuwacasoaaageiq))->saemoowcasogykak($this->eyamqkqiykagecsw()); return $ywoucyskcquysiwc; } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
