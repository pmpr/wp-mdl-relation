<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff9686830a2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\120\x6f\163\x74\x20\124\x79\160\x65\x73", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x64\x5f\155\145\x74\141\x5f\x62\157\x78\145\x73", [$this, "\x73\x69\153\x71\x67\x67\167\x6d\x6d\171\x6b\x75\151\171\155\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\x2f\x28\x5b\136\x2f\135\x2b\x29\x2f{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\151\156\144\x65\170\x2e\160\x68\160\x3f\x70\157\x73\x74\x5f\164\x79\160\x65\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\75\x24\x6d\x61\164\143\150\145\x73\x5b\61\135"; if (!$kiyaqqoyagguscog) { goto egyyiccaeeiooaua; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); egyyiccaeeiooaua: $ucccueqywigcukcc .= "\77\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\x74\x6f\x70"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\x6e\157\162\x6d\x61\x6c"); if (!($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg))) { goto omqiayeucoioqoao; } foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto igooksugieceoege; } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\155\145\x74\x61\x5f\x62\157\170", self::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\x52\145\154\141\x74\x69\x6f\156\40\x77\151\164\150\40\45\163", PR__MDL__RELATION), $mksyucucyswaukig->label), self::cacismqswgaewkuu => $useksmwkuswkwcqg, self::osiogououyayqyck => $mgkceomocowocqyo, self::wwgusigoaksqmwsm => [$this, "\171\x73\x79\x65\x69\151\x79\161\x73\145\143\155\x67\157\171\165"]]); igooksugieceoege: cewmoqyysgsmuiya: } scisgsyemmsekgos: omqiayeucoioqoao: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo[self::okeuagwgwkmiokac]) && $qookweymeqawmcwo[self::okeuagwgwkmiokac])) { goto ugqaaewwmkocwwgy; } return $qookweymeqawmcwo[self::okeuagwgwkmiokac]; ugqaaewwmkocwwgy: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\x53\x6f\x6d\x65\164\x68\x69\156\147\x20\151\x73\x20\x77\x72\157\156\147\40\x69\x6e\40\x72\x65\154\x61\164\x69\157\156\40\x66\x69\145\154\x64\40\x72\145\156\144\145\x72\x69\156\147", PR__MDL__RELATION), "\162\x65\x6c\141\x74\151\157\x6e", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto wgewmqieuamsoayy; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); wgewmqieuamsoayy: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto kqgcyoscsusgoaqi; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); kqgcyoscsusgoaqi: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto ueigkucgaucgeimc; } $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto sggawugoykqcmsug; ueigkucgaucgeimc: $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); sggawugoykqcmsug: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if (!($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::moegqsqomeumiomk))) { goto wkeuuycukmuqiaom; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); wkeuuycukmuqiaom: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [$amakmumgguksgmum::yyuwuqsiucweeoue(self::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([self::qayiiikwusguoask => __("\x53\151\x64\145\x62\x61\162", PR__MDL__RELATION), "\141\x64\166\141\x6e\x63\145\144" => __("\102\157\164\164\x6f\x6d", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\x4d\145\x74\141\x42\157\x78\40\120\157\x73\151\164\151\x6f\x6e", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\x50\157\x73\151\x74\151\x6f\156\x20\157\146\x20\155\x65\x74\x61\x62\157\x78\x20\x69\x6e\40\x65\x64\x69\164\40\163\143\x72\x65\x65\156\40\x6f\146\40\x63\165\163\164\157\155\x20\160\x6f\163\164\40\164\x79\160\145\163\56", PR__MDL__RELATION)), $amakmumgguksgmum::qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\x49\164\x65\x6d\x73", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\156\x61\142\154\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::iycuamekoueuemoy)->gswweykyogmsyawy(__("\111\x6e\x76\x65\162\x73\x65\40\x53\151\144\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::mkousmkiawwousws)->gswweykyogmsyawy(__("\x49\x6d\x61\x67\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::NAME)->gswweykyogmsyawy(__("\101\144\x6d\151\156\x20\x50\x61\156\145\x6c\40\116\x61\x6d\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x4f\x72\151\147\151\x6e\40\x50\x6f\x73\164\x20\x54\x79\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\104\145\x73\x74\x69\156\x61\x74\151\157\x6e\40\120\x6f\163\x74\x20\124\171\160\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\117\162\x69\147\151\x6e\x20\x50\x6f\x73\164\40\x54\x79\160\x65\40\x54\151\164\x6c\145", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\45\x73\72\40\x25\163", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\116\157\164\x69\x63\145", PR__MDL__RELATION)), __("\x57\x69\154\154\x20\x62\145\40\x75\x73\145\144\40\141\x73\x20\x73\154\x75\x67\x20\164\157\157\56", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\104\x65\163\164\151\156\x61\x74\151\157\156\x20\x50\x6f\x73\x74\x20\x54\x79\x70\x65\40\x54\151\164\x6c\145", PR__MDL__RELATION)))]; } }
