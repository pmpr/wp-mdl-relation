<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654f3d1092905             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\120\157\x73\x74\x20\x54\171\x70\145\x73", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x64\137\155\x65\164\x61\x5f\x62\x6f\170\145\x73", [$this, "\x73\x69\x6b\x71\x67\x67\167\155\x6d\171\x6b\x75\151\171\155\171"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\x5e{$iakkeikwceeomgyq}\x2f\x28\133\136\57\x5d\53\x29\x2f{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\x69\156\x64\145\x78\x2e\x70\150\x70\x3f\160\157\x73\x74\137\x74\171\160\x65\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\75\44\155\x61\164\143\x68\145\x73\133\61\x5d"; if (!$kiyaqqoyagguscog) { goto qqewoyookaskiuek; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); qqewoyookaskiuek: $ucccueqywigcukcc .= "\77\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\x74\x6f\160"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\x6e\x6f\x72\x6d\x61\154"); if (!($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg))) { goto eegqyykygiccaoeo; } foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto miyqyeiwquwsacsm; } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\x6d\145\164\x61\137\142\x6f\x78", self::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\x52\145\154\x61\x74\x69\x6f\x6e\40\167\x69\x74\150\40\45\x73", PR__MDL__RELATION), $mksyucucyswaukig->label), self::cacismqswgaewkuu => $useksmwkuswkwcqg, self::osiogououyayqyck => $mgkceomocowocqyo, self::wwgusigoaksqmwsm => [$this, "\171\163\171\x65\x69\151\x79\x71\163\x65\143\155\147\157\x79\165"]]); miyqyeiwquwsacsm: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: eegqyykygiccaoeo: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo[self::okeuagwgwkmiokac]) && $qookweymeqawmcwo[self::okeuagwgwkmiokac])) { goto ywqgcegomwaiuquc; } return $qookweymeqawmcwo[self::okeuagwgwkmiokac]; ywqgcegomwaiuquc: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\123\157\x6d\145\x74\150\x69\156\147\40\151\x73\40\x77\x72\x6f\x6e\x67\40\151\156\40\162\x65\x6c\141\164\x69\x6f\156\x20\x66\x69\145\154\x64\x20\x72\145\x6e\144\145\x72\151\x6e\147", PR__MDL__RELATION), "\162\x65\x6c\141\164\x69\157\156", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto wmmggowmigekyoso; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); wmmggowmigekyoso: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto soqqemyioggmoakg; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); soqqemyioggmoakg: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto acaqummmoyiemqss; } $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto suswcqoyyqkkquuo; acaqummmoyiemqss: $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); suswcqoyyqkkquuo: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if (!($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::moegqsqomeumiomk))) { goto eeqesooyqagwawae; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); eeqesooyqagwawae: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [$amakmumgguksgmum::yyuwuqsiucweeoue(self::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([self::qayiiikwusguoask => __("\123\151\x64\145\x62\x61\162", PR__MDL__RELATION), "\141\144\x76\x61\x6e\x63\145\144" => __("\102\x6f\x74\x74\157\x6d", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\115\x65\164\141\x42\157\170\40\x50\x6f\163\151\164\x69\157\x6e", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\120\x6f\163\151\x74\x69\157\156\40\x6f\x66\40\155\x65\x74\x61\x62\x6f\x78\x20\x69\x6e\40\145\x64\x69\x74\x20\x73\143\x72\x65\x65\x6e\40\x6f\x66\x20\x63\x75\163\164\157\x6d\40\160\x6f\163\x74\x20\x74\x79\160\145\x73\x2e", PR__MDL__RELATION)), $amakmumgguksgmum::qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\x49\164\x65\155\x73", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\x45\156\x61\142\x6c\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::iycuamekoueuemoy)->gswweykyogmsyawy(__("\111\156\x76\145\x72\x73\x65\40\123\151\144\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::mkousmkiawwousws)->gswweykyogmsyawy(__("\111\155\141\x67\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::NAME)->gswweykyogmsyawy(__("\101\144\155\151\x6e\x20\120\x61\x6e\x65\x6c\x20\116\x61\155\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x4f\162\151\147\151\156\x20\x50\x6f\163\164\x20\x54\171\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\104\x65\163\x74\x69\x6e\x61\x74\x69\157\x6e\40\120\157\163\x74\40\x54\171\160\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\x4f\x72\x69\147\151\156\40\120\157\163\x74\40\x54\171\160\145\40\x54\151\164\x6c\145", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\x25\163\72\x20\45\x73", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\x4e\x6f\x74\151\x63\x65", PR__MDL__RELATION)), __("\x57\151\154\154\40\x62\145\x20\165\x73\x65\x64\x20\141\163\40\x73\x6c\x75\147\x20\164\157\157\x2e", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\x44\145\x73\164\151\156\141\164\151\157\156\40\x50\157\x73\164\x20\x54\171\x70\x65\40\x54\151\164\x6c\x65", PR__MDL__RELATION)))]; } }
