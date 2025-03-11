<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
                'option_name' => 'Referral Code',
                'option_code' => 'referral-code',
                'option_value' => 'MD-y-m-00000',
                'terms_and_conditions_en' => __('Terms and Conditions
These Terms and Conditions govern the use of the "Madhurima Gold & Diamonds App" (“Mobile Application” or “Service”) and any of its related products and services (collectively, “Services”), developed and provided by Madhurima Gold and Diamonds (with address 59/2 Railway Station Road, Mele Palayam, Kozhikode, PIN - 673001) (“hereinafter referred to as "Madhurima Gold & Diamonds" or "we" or "us", or "our").
Acceptance of Terms
By accessing, downloading, installing, or using the App, you (hereinafter referred to as the "User" or "you") agree to be bound by these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not download, install, or use the App. By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. You acknowledge that this Agreement is a legally binding contract between you and Madhurima Gold & Diamonds, even though executed electronically and not signed by you.
Table of contents
Accounts and membership
Prohibited uses
Payments
Severability
Dispute resolution
Changes and amendments
Contacting us

Accounts and membership
You must be at least 18 years of age to use the Mobile Application and Services. By using the Mobile Application and Services and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account in the Mobile Application, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you sign in and start using the Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.
Prohibited uses
In addition to other terms as set forth in the Agreement, you are prohibited from using the Mobile Application and Services or Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Mobile Application and Services, third party products and services, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Mobile Application and Services, third party products and services, or the Internet. We reserve the right to terminate your use of the Mobile Application and Services for violating any of the prohibited uses.
Payments
Payments to the app should be made only through Razor Pay payment gateway; users can make the payment using debit cards, credit cards, UPI, or any other methods specified in the gateway. Our valuable users should make the payment on or before the 5th of every month. In the failure of such obligations, the subscribers of schemes would be compelled to follow whatever terms and conditions the respected schemes have to offer. 
Severability
All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.
Dispute resolution
The formation, interpretation, and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Kerala, India without regard to its rules on conflicts or choice of law and, to the extent applicable, the laws of India. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be the District Court located in Kozhikode, Kerala, India, and you hereby submit to the personal jurisdiction of the court. You hereby waive any right to a jury trial in any proceeding arising out of or related to this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.
Changes and amendments
We reserve the right to modify this Agreement or its terms related to the Mobile Application and Services at any time at our discretion. When we do, we will post a notification in the Mobile Application. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.
An updated version of this Agreement will be effective immediately upon the posting of the revised Agreement unless otherwise specified. Your continued use of the Mobile Application and Services after the effective date of the revised Agreement (or such other act specified at that time) will constitute your consent to those changes.
Acceptance of these terms
You acknowledge that you have read this Agreement and agree to all its terms and conditions. By accessing and using the Mobile Application and Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to access or use the Mobile Application and Services. 
Contacting us
If you have any questions, concerns, or complaints regarding this Agreement, we encourage you to contact us using the details below:
madhurimagold@gmail.com
This document was last updated on December 12, 2024.'),
                'terms_and_conditions_ml' => __('
നിബന്ധനകളുംവ്യവസ്ഥകളും
കരാറിൽപറഞ്ഞിരിക്കുന്നമറ്റ്നിബന്ധനകൾക്ക്പുറമേ, മൊബൈൽആപ്ലിക്കേഷനുംസേവനങ്ങളുംഅല്ലെങ്കിൽഉള്ളടക്കവുംതാഴെപറയുന്നആവശ്യങ്ങൾക്ക്ഉപയോഗിക്കുന്നതിൽനിന്ന്നിങ്ങളെനിരോധിച്ചിരിക്കുന്നു: (എ) ഏതെങ്കിലുംനിയമവിരുദ്ധമായആവശ്യത്തിന്; (ബി) നിയമവിരുദ്ധമായഎന്തെങ്കിലുംപ്രവൃത്തികൾചെയ്യാനോഅതിൽപങ്കെടുക്കാനോമറ്റുള്ളവരോട്അഭ്യർത്ഥിക്കുക; (സി) ഏതെങ്കിലുംഅന്താരാഷ്ട്ര, ഫെഡറൽ, പ്രവിശ്യഅല്ലെങ്കിൽസംസ്ഥാനനിയന്ത്രണങ്ങൾ, നിയമങ്ങൾ, അല്ലെങ്കിൽപ്രാദേശികഓർഡിനൻസുകൾഎന്നിവലംഘിക്കുന്നതിന്; (ഡി) നമ്മുടെബൗദ്ധികസ്വത്തവകാശംഅല്ലെങ്കിൽമറ്റുള്ളവരുടെബൗദ്ധികസ്വത്തവകാശംലംഘിക്കുകയോചെയ്യുക; (ഇ) ലിംഗഭേദം, ലൈംഗികആഭിമുഖ്യം, മതം, വംശം, പ്രായം, ദേശീയഉത്ഭവംഅല്ലെങ്കിൽവൈകല്യംഎന്നിവയുടെഅടിസ്ഥാനത്തിൽഉപദ്രവിക്കുക, ദുരുപയോഗംചെയ്യുക, അപമാനിക്കുക,അപകീർത്തിപ്പെടുത്തുക, ഭീഷണിപ്പെടുത്തുക, അല്ലെങ്കിൽവിവേചനംകാണിക്കുക; (എഫ്) തെറ്റായഅല്ലെങ്കിൽതെറ്റിദ്ധരിപ്പിക്കുന്നവിവരങ്ങൾസമർപ്പിക്കാൻ; (ജി) മൊബൈൽആപ്ലിക്കേഷൻ്റെയുംസേവനങ്ങളുടെയും, മൂന്നാംകക്ഷിഉൽപ്പന്നങ്ങളുടെയുംസേവനങ്ങളുടെയുംഅല്ലെങ്കിൽഇൻറർനെറ്റിൻ്റെയുംപ്രവർത്തനത്തെയോഏതെങ്കിലുംതരത്തിൽഉപയോഗിക്കുന്നതോആയവൈറസുകളോമറ്റേതെങ്കിലുംതരത്തിലുള്ളക്ഷുദ്രകോഡുകളോഅപ്ലോഡ്ചെയ്യുകയോകൈമാറുകയോചെയ്യുക; (h) സ്പാം, ഫിഷ്, ഫാം, പ്രീടെക്സ്റ്റ്,സ്പൈഡർ,ക്രാൾ, അല്ലെങ്കിൽസ്ക്രാപ്പ്എന്നിവചെയ്യുക; (i) ഏതെങ്കിലുംഅശ്ലീലമോഅധാർമികമോആയഉദ്ദേശ്യങ്ങൾക്കായിഉപയോഗിക്കുക (j) മൊബൈൽആപ്ലിക്കേഷൻ്റെയുംസേവനങ്ങളുടെയും, മൂന്നാംകക്ഷിഉൽപ്പന്നങ്ങളുടെയുംസേവനങ്ങളുടെയുംഅല്ലെങ്കിൽഇൻ്റർനെറ്റിൻ്റെസുരക്ഷാസവിശേഷതകളിൽഇടപെടുകയോഒഴിവാക്കുകയോചെയ്യുക. നിരോധിതഉപയോഗങ്ങളിൽഏതെങ്കിലുംലംഘിച്ചകാരണത്താൽമൊബൈൽആപ്ലിക്കേഷൻ്റെയുംസേവനങ്ങളുടെയുംനിങ്ങളുടെഉപയോഗംഅവസാനിപ്പിക്കാനുള്ളഅവകാശംഞങ്ങളിൽനിക്ഷിപ്തമാണ്.

പേയ്മെന്റുകൾ
ആപ്പിലേക്കുള്ളപേയ്മെന്റുകൾ Razor Payഗേറ്റ്വേവഴിമാത്രമേനടത്താവൂ; ഉപയോക്താക്കൾക്ക്ഡെബിറ്റ്കാർഡുകൾ, ക്രെഡിറ്റ്കാർഡുകൾ, UPI അല്ലെങ്കിൽഗേറ്റ്വേയിൽവ്യക്തമാക്കിയമറ്റേതെങ്കിലുംരീതികൾഉപയോഗിച്ച്പേയ്മെന്റ്നടത്താം.ഞങ്ങളുടെവിലയേറിയഉപയോക്താക്കൾഎല്ലാമാസവും 5-ാംതീയതിയോഅതിന്മുമ്പോപേയ്മെൻ്റ്നടത്തണം. അത്തരംബാധ്യതകൾപരാജയപ്പെട്ടാൽ, ബഹുമാനപ്പെട്ടസ്കീമുകൾവാഗ്ദാനംചെയ്യുന്നനിബന്ധനകളുംവ്യവസ്ഥകളുംപാലിക്കാൻസ്കീമുകളുടെവരിക്കാർനിർബന്ധിതരാകും.
അവസാനിപ്പിക്കൽ
ഈനിബന്ധനകളിലെയുംവ്യവസ്ഥകളിലെയുംഏതെങ്കിലുംവ്യവസ്ഥകൾഅസാധുവായതോനടപ്പിലാക്കാൻകഴിയാത്തതോആണെന്ന്കണ്ടെത്തിയാൽ, അത്തരംവ്യവസ്ഥകൾഈനിബന്ധനകളിൽനിന്നുംവ്യവസ്ഥകളിൽനിന്നുംവേർപെടുത്തിയതായികണക്കാക്കുകയുംശേഷിക്കുന്നവ്യവസ്ഥകളുടെസാധുതയെയുംനിർവ്വഹണത്തെയുംബാധിക്കുകയുമില്ല.

തർക്കപരിഹാരം
ഈഉടമ്പടിഅതിൻ്റെനിയമതത്വങ്ങളുടെവൈരുദ്ധ്യംപരിഗണിക്കാതെ, ഇന്ത്യയിലെകേരളസംസ്ഥാനത്തിൻ്റെനിയമങ്ങൾക്കനുസൃതമായിനിയന്ത്രിക്കപ്പെടുകയുംവ്യാഖ്യാനിക്കുകയുംചെയ്യും.ഈഉടമ്പടിപ്രകാരംഉണ്ടാകുന്നതർക്കങ്ങൾക്കുള്ളഅധികാരപരിധിഇന്ത്യയിലെകേരളത്തിലെകോഴിക്കോട്ജില്ലാകോടതിയിൽമാത്രമായിരിക്കും. നിങ്ങൾഇതിനാൽഅത്തരംകോടതിയുടെഅധികാരപരിധിഅംഗീകരിക്കുകയുംജൂറിവിചാരണയ്ക്കുള്ളഏതെങ്കിലുംഅവകാശംഒഴിവാക്കുകയുംചെയ്യുന്നു. ചരക്കുകളുടെഅന്താരാഷ്ട്രവിൽപ്പനയ്ക്കുള്ളകരാറുകളെക്കുറിച്ചുള്ളഐക്യരാഷ്ട്രകൺവെൻഷൻബാധകമല്ല.

മാറ്റങ്ങളുംഭേദഗതികളും
ഞങ്ങളുടെവിവേചനാധികാരത്തിൽഏത്സമയത്തുംമൊബൈൽആപ്ലിക്കേഷനുംസേവനങ്ങളുമായിബന്ധപ്പെട്ടഈകരാറോഅതിൻ്റെനിബന്ധനകളോപരിഷ്കരിക്കാനുള്ളഅവകാശംഞങ്ങളിൽനിക്ഷിപ്തമാണ്. ഞങ്ങൾഇത്ചെയ്യുമ്പോൾ, ഞങ്ങൾമൊബൈൽആപ്ലിക്കേഷനിൽഒരുഅറിയിപ്പ്പോസ്റ്റ്ചെയ്യും. നിങ്ങൾനൽകിയകോൺടാക്റ്റ്വിവരങ്ങൾപോലെ, ഞങ്ങളുടെവിവേചനാധികാരത്തിൽമറ്റ്മാർഗങ്ങളിലൂടെയുംഞങ്ങൾനിങ്ങൾക്ക്അറിയിപ്പ്നൽകിയേക്കാം.
ഈഉടമ്പടിയുടെഅപ്ഡേറ്റ്ചെയ്തപതിപ്പ്, വ്യക്തമാക്കിയിട്ടില്ലെങ്കിൽ, പുതുക്കിയഉടമ്പടിപോസ്റ്റുചെയ്യുമ്പോൾഉടനടിപ്രാബല്യത്തിൽവരും. പുതുക്കിയഉടമ്പടിപ്രാബല്യത്തിൽവരുന്നതീയതിക്ക്ശേഷം (അല്ലെങ്കിൽആസമയത്ത്വ്യക്തമാക്കിയമറ്റ്ആക്റ്റ്) മൊബൈൽആപ്ലിക്കേഷൻ്റെയുംസേവനങ്ങളുടെയുംനിങ്ങളുടെതുടർച്ചയായഉപയോഗംആമാറ്റങ്ങൾക്ക്നിങ്ങളുടെസമ്മതംനൽകിയതായിപരിഗണിക്കും.

ഈനിബന്ധനകളുടെസ്വീകാര്യത
നിങ്ങൾഈഉടമ്പടിവായിച്ചതായിസമ്മതിക്കുകയുംഅതിൻ്റെഎല്ലാനിബന്ധനകളുംവ്യവസ്ഥകളുംഅംഗീകരിക്കുകയുംചെയ്യുന്നു. മൊബൈൽആപ്ലിക്കേഷനുംസേവനങ്ങളുംആക്സസ്ചെയ്യുന്നതിലൂടെയുംഉപയോഗിക്കുന്നതിലൂടെയുംനിങ്ങൾഈഉടമ്പടിക്ക്വിധേയരാണെന്ന്സമ്മതിക്കുന്നു. ഈകരാറിൻ്റെനിബന്ധനകൾപാലിക്കാൻനിങ്ങൾസമ്മതിക്കുന്നില്ലെങ്കിൽ, മൊബൈൽആപ്ലിക്കേഷനുംസേവനങ്ങളുംആക്സസ്ചെയ്യാനോഉപയോഗിക്കാനോനിങ്ങൾക്ക്അധികാരമില്ല.

ഞങ്ങളെബന്ധപ്പെടുന്നതിന്
ഈകരാറുമായിബന്ധപ്പെട്ട്നിങ്ങൾക്ക്എന്തെങ്കിലുംചോദ്യങ്ങളോആശങ്കകളോപരാതികളോഉണ്ടെങ്കിൽ, ചുവടെയുള്ളവിശദാംശങ്ങൾഉപയോഗിച്ച്ഞങ്ങളെബന്ധപ്പെടാവുന്നതാണ്.madhurimagold@gmail.com
ഈഡോക്യുമെൻ്റ്അവസാനംഅപ്ഡേറ്റ്ചെയ്തത് 2024 ഡിസംബർ 12 നാണ്'),
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
        ];

        DB::table('settings')->insert($settings);
    }
}
