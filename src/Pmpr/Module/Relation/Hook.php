<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc57c5720c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Manager\PostManager; class Hook extends Container { const ggsoiqkcasskkeae = "\160\157\163\164\137\137\x69\156\137\x72\145\154\x61\164\x69\157\156"; public function wigskegsqequoeks() { $this->waqewsckuayqguos(Relation::esgskoesuqecuuwg . "\141\x64\144\137\x64\x65\146\141\x75\x6c\x74\x5f\x69\164\x65\x6d\163", [$this, "\x63\x79\153\171\x6b\147\x65\171\155\x6b\x65\143\155\x6f\x65\x6b"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(Relation::esgskoesuqecuuwg . "\147\145\164\137\x70\x6f\163\164\163", [$this, "\x69\171\x73\163\x67\x6f\x69\x77\x67\167\171\x67\x65\141\143\x67"], 10, 4)->aqaqisyssqeomwom("\x67\x65\164\137\x76\x61\x6c\x69\x64\137\x72\145\x6c\x61\164\x69\157\156\x73", [$this, "\163\167\x67\x65\x77\x61\x6f\x77\153\167\151\151\163\153\153\x63"], 10, 2)->aqaqisyssqeomwom("\x67\145\164\137\x70\x6f\163\x74\163\137\x61\162\147\x73", [$this, "\x6d\x73\171\x79\161\x61\x69\143\x6f\145\x71\161\143\157\x6d\143"], 10, 2)->aqaqisyssqeomwom(Relation::esgskoesuqecuuwg . "\x67\x65\x74\137\160\157\x73\164\x5f\x62\171\x5f\x6d\x65\164\x61\x6b\145\x79", [$this, "\153\x6f\x77\x65\145\163\x63\155\151\143\157\153\165\157\x6f\x6b"], 10, 2); } public function koweescmicokuook($ayegqaqygsqsmews, $gwiwsycaaqgwmewg = null) { if ($gwiwsycaaqgwmewg) { $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); } return $ayegqaqygsqsmews; } public function cykykgeymkecmoek($oammesyieqmwuwyi = []) { if ($oammesyieqmwuwyi) { $uwomkgseoiegeume = []; $amakmumgguksgmum = Post::uwoqgmuqskqcqsag(); $cmaccwokqweqweqi = $this->iucouyoswwsakqyc($amakmumgguksgmum); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { $kcguiwgkqgcuyiku = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::gygsikewooaciecc); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::moegqsqomeumiomk); if (!isset($cmaccwokqweqweqi[$gwiwsycaaqgwmewg]) && $uusmaiomayssaecw && $kcguiwgkqgcuyiku && $iakkeikwceeomgyq) { $uwomkgseoiegeume[] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($igqsaukqcqscimok, [Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::iccwcygaeqmomooo => Constants::ON, Constants::iycuamekoueuemoy => true]); } } if ($uwomkgseoiegeume) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($amakmumgguksgmum, array_values(array_merge($cmaccwokqweqweqi, $uwomkgseoiegeume))); } } } public function iyssgoiwgwygeacg($wyoiwuqokyeeuguk, $mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { if ($mcaisukqqyosuasi && $ccamueccusigaaio && $gwiwsycaaqgwmewg) { $wyoiwuqokyeeuguk = PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } return $wyoiwuqokyeeuguk; } public function msyyqaicoeqqcomc($ywmkwiwkosakssii = []) { if (isset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]) && !isset($ywmkwiwkosakssii[Constants::eqomgewoayseioos])) { $ayegqaqygsqsmews = $ywmkwiwkosakssii[self::ggsoiqkcasskkeae]; if ($ayegqaqygsqsmews) { [$iakkeikwceeomgyq, $oammesyieqmwuwyi] = PostManager::awiyyawscoigiuae($ayegqaqygsqsmews, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $ywmkwiwkosakssii[Constants::eqomgewoayseioos] = $oammesyieqmwuwyi; $ywmkwiwkosakssii[Constants::kcaoouwiygwwmiok] = $iakkeikwceeomgyq; unset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]); } } return $ywmkwiwkosakssii; } public function swgewaowkwiiskkc($gsgwomokyuwmqqkg = [], $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qayiiikwusguoask => null, Constants::mgsccwumkcawaqcy => Post::uwoqgmuqskqcqsag(), Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return $this->gyykaeouuskoqiye($ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy], $ywmkwiwkosakssii[Constants::qayiiikwusguoask], $ywmkwiwkosakssii[Constants::aisguagukaewucii]); } }
