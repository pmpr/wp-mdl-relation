<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6606995adaa37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\120\157\x73\164\40\x54\x79\x70\x65\163", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\144\x5f\155\145\164\141\x5f\142\x6f\x78\x65\163", [$this, "\x73\x69\x6b\161\x67\147\167\x6d\x6d\x79\x6b\165\151\171\155\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\57\x28\133\x5e\x2f\135\53\x29\x2f{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\x69\156\144\x65\170\x2e\x70\150\x70\77\x70\x6f\x73\x74\x5f\164\x79\160\x65\x3d{$muowmkwsoauukiag}\46{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\x3d\44\x6d\x61\164\143\x68\x65\x73\133\61\x5d"; if (!$kiyaqqoyagguscog) { goto cggowoquuiwqkyew; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); cggowoquuiwqkyew: $ucccueqywigcukcc .= "\x3f\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\x70"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\x6e\x6f\162\155\x61\x6c"); if (!($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg))) { goto meawswgwagoqgkye; } foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto goacqqsgaaigyuaw; } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\x6d\145\164\x61\137\142\157\x78", self::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\122\x65\x6c\141\x74\151\x6f\x6e\40\167\151\164\150\x20\x25\x73", PR__MDL__RELATION), $mksyucucyswaukig->label), self::cacismqswgaewkuu => $useksmwkuswkwcqg, self::osiogououyayqyck => $mgkceomocowocqyo, self::wwgusigoaksqmwsm => [$this, "\171\163\x79\145\151\x69\171\x71\163\145\x63\x6d\x67\157\x79\x75"]]); goacqqsgaaigyuaw: yiwiqaqmwiogawym: } ocokwuuquaokmasc: meawswgwagoqgkye: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo[self::okeuagwgwkmiokac]) && $qookweymeqawmcwo[self::okeuagwgwkmiokac])) { goto wcesymwqykqoyuqk; } return $qookweymeqawmcwo[self::okeuagwgwkmiokac]; wcesymwqykqoyuqk: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\x53\157\155\x65\x74\150\x69\x6e\147\x20\151\163\x20\167\x72\x6f\x6e\147\40\x69\156\40\x72\145\x6c\141\x74\x69\157\x6e\40\146\151\x65\154\144\40\162\x65\x6e\x64\145\162\151\x6e\147", PR__MDL__RELATION), "\x72\x65\x6c\x61\x74\x69\x6f\x6e", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto usqgaogkqgemuima; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); usqgaogkqgemuima: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto mswsoaimesegiiic; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); mswsoaimesegiiic: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto egasokooagakisiy; } $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto kecwuwwcwokuksyq; egasokooagakisiy: $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); kecwuwwcwokuksyq: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if (!($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::moegqsqomeumiomk))) { goto qgegkeomwscwwiuw; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); qgegkeomwscwwiuw: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->yyuwuqsiucweeoue(self::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([self::qayiiikwusguoask => __("\x53\151\x64\145\142\x61\x72", PR__MDL__RELATION), "\x61\144\166\x61\156\143\x65\x64" => __("\x42\157\164\x74\x6f\155", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\115\145\164\141\x42\x6f\x78\40\120\x6f\x73\x69\164\151\x6f\156", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\x50\157\x73\x69\164\151\157\156\x20\x6f\146\x20\155\145\x74\x61\x62\157\x78\40\x69\x6e\40\145\144\151\x74\40\163\x63\x72\145\145\x6e\x20\x6f\146\40\143\x75\163\x74\x6f\155\x20\x70\x6f\163\x74\x20\164\x79\x70\x65\x73\x2e", PR__MDL__RELATION)), $amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\111\164\145\155\163", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(self::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\x6e\141\142\154\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(self::iycuamekoueuemoy)->gswweykyogmsyawy(__("\111\156\x76\x65\x72\x73\x65\x20\x53\151\x64\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(self::mkousmkiawwousws)->gswweykyogmsyawy(__("\111\155\141\147\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(self::NAME)->gswweykyogmsyawy(__("\x41\x64\x6d\151\156\40\x50\141\156\x65\x6c\x20\x4e\141\155\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(self::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x4f\x72\151\x67\151\156\40\120\x6f\163\x74\40\x54\171\160\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(self::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x44\145\163\164\151\x6e\x61\x74\x69\x6f\156\x20\x50\157\x73\x74\40\x54\171\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(self::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\117\162\x69\147\151\156\40\x50\157\x73\164\x20\x54\x79\160\x65\x20\x54\151\164\154\x65", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\x25\163\x3a\x20\45\x73", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\x4e\x6f\x74\x69\x63\145", PR__MDL__RELATION)), __("\127\151\x6c\x6c\x20\x62\x65\40\x75\x73\x65\x64\40\141\163\40\x73\x6c\165\x67\40\x74\157\157\56", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(self::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\104\145\163\164\151\x6e\x61\x74\x69\157\x6e\40\x50\157\x73\x74\x20\x54\x79\x70\145\x20\x54\x69\x74\154\145", PR__MDL__RELATION)))]; } }
