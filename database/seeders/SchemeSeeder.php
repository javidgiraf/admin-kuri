<?php

namespace Database\Seeders;

use App\Models\Scheme;
use App\Models\SchemeType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scheme::truncate();

        $schemes = [
            [
                'title_en' => 'Fixed Payment Scheme',
                'title_ml' => 'നിശ്ചിത പെയ്മെന്റ് പദ്ധതി',
                'total_period' => '11',
                'scheme_type_id' => SchemeType::FIXED_PLAN,
                'payment_terms_en' => '<div>
                    <div>Duration of all schemes is 11 months. Payments are due on a monthly basis, and to keep the package active, customers must make their monthly payments between the 1st and 5th of each month. If payment is not received by the 5th, the package will get terminated, and the customer will no longer be eligible to continue the scheme. If the package gets terminated due to non-payment of installment in time, the total amount remitted so far could be withdrawn at the end of the maturation period of the scheme in cash or gold, without any offer.</div>
                </div>',
                'payment_terms_ml' => '<div>
                    <div>Duration of all schemes is 11 months. Payments are due on a monthly basis, and to keep the package active, customers must make their monthly payments between the 1st and 5th of each month. If payment is not received by the 5th, the package will get terminated, and the customer will no longer be eligible to continue the scheme. If the package gets terminated due to non-payment of installment in time, the total amount remitted so far could be withdrawn at the end of the maturation period of the scheme in cash or gold, without any offer.</div>
                </div>',
                'description_en' => '<div>
                    <div>Duration of Fixed Payment Scheme is 11 months.</div>
                    <div>&nbsp; &nbsp; ● In this fixed monthly payment plan, the payment amount is set and remains consistent each month.</div>
                    <div>&nbsp; &nbsp; ● In the 12th month, users can purchase gold jewelry free of making charges from Madhurima Gold and Diamonds (designs include Kolkata, Turkish, Bombay, Kerala, Nagas, and more).</div>
                    <div>&nbsp; &nbsp; ● Customers can pay between Rs 500 and Rs 500,000 per month (in multiples of 500).</div>
                    <div>&nbsp; &nbsp; ● The initial installment paid must remain consistent throughout the scheme. For example, if the first installment is Rs 10,000, the same amount applies to all subsequent months.</div>
                    <div>&nbsp; &nbsp; ● If installments are not paid before the 5th of each month, the package will get terminated and the customers will lose the privilege to avail offers. The total amount remitted so far could be withdrawn in cash or as gold purchases at the end of the scheme period on the 12th month without any offers.</div>
                    <div>&nbsp; &nbsp; ● Payments must be made exclusively through the Madhurima Gold and Diamonds app for security and transparency.</div>
                    <div>&nbsp; &nbsp; ● Gold rates will be based on the "current rates" at the end of the scheme period (12th month).</div>
                    <div>&nbsp; &nbsp; ● All disputes will be resolved under the jurisdiction of Kozhikode District Court. Current tax and revenue policies are applicable.</div>
                </div>',
                'description_ml' => '<div>
                    <div>നിശ്ചിത പെയ്മെന്റ് പദ്ധതിയുടെ കാലാവധി 11 മാസം ആയിരിക്കും.</div>
                    <div>&nbsp; &nbsp; ● കാലാവധി പൂർത്തിയായ ശേഷം 12-ാം മാസം ഉപയോക്താക്കൾക്ക് മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമൻഡ്സ് ജുവല്ലറിയിൽ നിന്നും ഏത് സ്വർണാഭരണങ്ങൾ ആയാലും (കോൽക്കത്ത, ടർക്കിഷ്, ബോംബെ, കേരള, നാഗാസ് തുടങ്ങിയ ഡിസൈനുകൾ ഉൾപ്പെടെ) പണിക്കൂലി ഇല്ലാതെ വാങ്ങാവുന്നതാണ്.</div>
                    <div>&nbsp; &nbsp; ● ഉപഭോക്താക്കൾക്ക് പ്രതിമാസം ₹500 മുതൽ ₹500 ന്റെ &nbsp;ഗുണിതങ്ങൾ ആയി ₹500,000 വരെ മാസ തവണകളായി അടക്കാവുന്നതാണ്.</div>
                    <div>&nbsp; &nbsp; ● നിശ്ചിത തുക ആദ്യമാസം അടക്കുന്നത് തന്നെ ആവണം പദ്ധതിയുടെ മുഴുവൻ കാലയളവിലും അടക്കേണ്ടത്. ഉദാഹരണത്തിന്, ആദ്യമാസം ₹10,000 അടച്ചാൽ, തുടർന്നുള്ള മാസങ്ങളിലും ഇതേ തുക തന്നെ അടക്കണം. തുക കൂട്ടാനോ കുറക്കാനോ പാടില്ല.</div>
                    <div>&nbsp; &nbsp; ● പ്രതിമാസം 5-ാം തീയതി മുതൽ മുൻപ് അടവ് അടച്ചില്ലെങ്കിൽ, ഉപഭോക്താക്കൾക്ക് കുറിയിൽ തുടരുന്നതിനുള്ള യോഗ്യത നഷ്ടപ്പെടും. തവണ അടവിൽ വീഴ്ച്ച വരുത്തിയാൽ കുറിയുടെ മൊത്തം കാലാവധി കഴിഞ്ഞു അടച്ച തുക പണമായോ സ്വർണ്ണമായോ 11 മാസത്തെ ഓഫർ ഇല്ലാതെ വാങ്ങാവുന്നതാണ്.</div>
                    <div>&nbsp; &nbsp; ● സുരക്ഷയ്ക്കും സുതാര്യതക്കും വേണ്ടി അടവുകൾ നിർബന്ധമായും കുറി ആപ്പ് വഴി മാത്രം അടക്കേണ്ടതാണ്.</div>
                    <div>&nbsp; &nbsp; ● സ്കീം കാലാവധി അവസാനിക്കുന്ന ദിവസത്തെ സ്വർണ്ണ വിലയാണ് പരിഗണിക്കുക. ഉദാഹരണത്തിന് മാസം 1-ാം തീയതി ആണ് സ്കീം തുടങ്ങിയതെങ്കിൽ 12-ാം മാസം 1-ാം തീയതിയിലെ സ്വർണ്ണ വിലയായിരിക്കും പരിഗണിക്കുക.</div>
                    <div>&nbsp; &nbsp; ● ഈ പദ്ധതിയുടെ എല്ലാ തർക്കങ്ങളും കോഴിക്കോട് ജില്ലാ കോടതിയുടെ അധികാര പരിധിയിൽ ആയിരിക്കും. ഈ പദ്ധതി സർക്കാരിന്റെ കാലാകാലങ്ങളായുള്ള നയവ്യതിയാനങ്ങൾക്കും നിബന്ധനകൾക്കും വിധേയമായിരിക്കും.</div>
                </div>',
                'terms_and_conditions_en' => '<div>
                    <div>These Terms and Conditions govern the use of the "Madhurima Gold &amp; Diamonds App" (&ldquo;Mobile Application&rdquo; or &ldquo;Service&rdquo;) and any of its related products and services (collectively, &ldquo;Services&rdquo;), developed and provided by Madhurima Gold and Diamonds (with address 59/2 Railway Station Road, Mele Palayam, Kozhikode, PIN - 673001) (&ldquo;hereinafter referred to as "Madhurima Gold &amp; Diamonds" or "we" or "us", or "our").</div>
                    <div>Acceptance of Terms</div>
                    <div>By accessing, downloading, installing, or using the App, you (hereinafter referred to as the "User" or "you") agree to be bound by these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not download, install, or use the App. By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. You acknowledge that this Agreement is a legally binding contract between you and Madhurima Gold &amp; Diamonds, even though executed electronically and not signed by you.</div>
                    <div>Table of contents</div>
                    <div>Accounts and membership</div>
                    <div>Prohibited uses</div>
                    <div>Payments</div>
                    <div>Severability</div>
                    <div>Dispute resolution</div>
                    <div>Changes and amendments</div>
                    <div>Contacting us</div>
                    <br>
                    <div>Accounts and membership</div>
                    <div>You must be at least 18 years of age to use the Mobile Application and Services. By using the Mobile Application and Services and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account in the Mobile Application, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you sign in and start using the Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</div>
                    <div>Prohibited uses</div>
                    <div>In addition to other terms as set forth in the Agreement, you are prohibited from using the Mobile Application and Services or Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Mobile Application and Services, third party products and services, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Mobile Application and Services, third party products and services, or the Internet. We reserve the right to terminate your use of the Mobile Application and Services for violating any of the prohibited uses.</div>
                    <div>Payments</div>
                    <div>Payments to the app should be made only through Razor Pay payment gateway; users can make the payment using debit cards, credit cards, UPI, or any other methods specified in the gateway. Our valuable users should make the payment on or before the 5th of every month. In the failure of such obligations, the subscribers of schemes would be compelled to follow whatever terms and conditions the respected schemes have to offer.</div>
                    <div>Severability</div>
                    <div>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</div>
                    <div>Dispute resolution</div>
                    <div>The formation, interpretation, and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Kerala, India without regard to its rules on conflicts or choice of law and, to the extent applicable, the laws of India. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be the District Court located in Kozhikode, Kerala, India, and you hereby submit to the personal jurisdiction of the court. You hereby waive any right to a jury trial in any proceeding arising out of or related to this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.</div>
                    <div>Changes and amendments</div>
                    <div>We reserve the right to modify this Agreement or its terms related to the Mobile Application and Services at any time at our discretion. When we do, we will post a notification in the Mobile Application. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.</div>
                    <div>An updated version of this Agreement will be effective immediately upon the posting of the revised Agreement unless otherwise specified. Your continued use of the Mobile Application and Services after the effective date of the revised Agreement (or such other act specified at that time) will constitute your consent to those changes.</div>
                    <div>Acceptance of these terms</div>
                    <div>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By accessing and using the Mobile Application and Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to access or use the Mobile Application and Services.</div>
                    <div>Contacting us</div>
                    <div>If you have any questions, concerns, or complaints regarding this Agreement, we encourage you to contact us using the details below:</div>
                    <div>madhurimagold@gmail.com</div>
                    <div>This document was last updated on December 12, 2024.</div>
                </div>',
                'terms_and_conditions_ml' => '<div>
                    <div>നിശ്ചിത പെയ്മെന്റ് പദ്ധതി, നിബന്ധനകളും വ്യവസ്ഥകളും.</div>
                    <div>ഈ നിബന്ധനകളും വ്യവസ്ഥകളും മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമണ്ട്സ് (വിലാസം 59/2 റെയിൽവേ സ്റ്റേഷൻ റോഡ്, മേലെ പാളയം, കോഴിക്കോട്, പിൻ - 673001) (&ldquo;ഇനിമുതൽ "മധുരിമ ഗോൾഡ് &amp; ഡയമണ്ട്സ്" അല്ലെങ്കിൽ "ഞങ്ങൾ" അല്ലെങ്കിൽ "ഞങ്ങളുടെ" എന്ന് വിളിക്കുന്നു) വികസിപ്പിച്ചതും നൽകുന്നതും ആയ "മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമണ്ട്സ് ആപ്പ്" ("മൊബൈൽ ആപ്ലിക്കേഷൻ" അല്ലെങ്കിൽ "സേവനം") എന്നിവയുടെ ഉപയോഗത്തെയും അതിൻ്റെ ഏതെങ്കിലും അനുബന്ധ ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും (മൊത്തം, "സേവനങ്ങൾ") നിയന്ത്രിക്കുന്നതിന് വേണ്ടി യുള്ളതാണ്.</div>
                    <br>
                    <div>നിബന്ധനകളുടെ സ്വീകാര്യത</div>
                    <br>
                    <div>ആപ്പ് ആക്സസ് ചെയ്യുകയോ ഡൗൺലോഡ് ചെയ്യുകയോ ഇൻസ്റ്റാൾ ചെയ്യുകയോ ഉപയോഗിക്കുകയോ ചെയ്യുന്നതിലൂടെ, നിങ്ങൾ (ഇനിമുതൽ "ഉപയോക്താവ്" അല്ലെങ്കിൽ "നിങ്ങൾ" എന്ന് വിളിക്കപ്പെടുന്നു) ഈ ഉടമ്പടിയുടെ നിബന്ധനകൾ വായിക്കുകയും മനസ്സിലാക്കുകയും അംഗീകരിക്കുകയും ചെയ്യുന്നുവെന്നും നിങ്ങൾ അംഗീകരിക്കുന്നു. &nbsp;ഈ ഉടമ്പടി നിങ്ങൾ ഒപ്പിട്ടിട്ടില്ലെങ്കിലും ഇലക്ട്രോണിക് രീതിയിൽ നടപ്പിലാക്കിയാലും, നിങ്ങളും മധുരിമ ഗോൾഡ് &amp; ഡയമണ്ട്സും തമ്മിലുള്ള നിയമപരമായ കരാറാണ് ഈ കരാർ എന്ന് നിങ്ങൾ സമ്മതിക്കുന്നു. ഈ നിബന്ധനകളും വ്യവസ്ഥകളും നിങ്ങൾ അംഗീകരിക്കുന്നില്ലെങ്കിൽ, ആപ്പ് ഡൗൺലോഡ് ചെയ്യുകയോ ഇൻസ്റ്റാൾ ചെയ്യുകയോ ഉപയോഗിക്കുകയോ ചെയ്യരുത്.</div>
                    <br>
                    <div>ഉള്ളടക്ക പട്ടിക</div>
                    <div>അക്കൗണ്ടുകളും അംഗത്വവും</div>
                    <div>നിരോധിത ഉപയോഗങ്ങൾ</div>
                    <div>പേയ്മെൻ്റുകൾ</div>
                    <div>വേർപിരിയൽ</div>
                    <div>തർക്ക പരിഹാരം</div>
                    <div>മാറ്റങ്ങളും ഭേദഗതികളും</div>
                    <div>ഞങ്ങളെ ബന്ധപ്പെടുന്നതിന്</div>
                    <br>
                    <div>സ്ഥിരീകരിക്കുകയും സാക്ഷ്യപ്പെടുത്തുകയും ചെയ്യുന്നു</div>
                    <div>അക്കൗണ്ടുകളും അംഗത്വവും</div>
                    <div>മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ഉപയോഗിക്കുന്നതിന് നിങ്ങൾക്ക് കുറഞ്ഞത് 18 വയസ്സ് പ്രായമുണ്ടായിരിക്കണം. മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ഉപയോഗിക്കുന്നതിലൂടെയും ഈ ഉടമ്പടി അംഗീകരിക്കുന്നതിലൂടെയും നിങ്ങൾക്ക് കുറഞ്ഞത് 18 വയസ്സ് പ്രായമുണ്ടെന്ന് നിങ്ങൾ സ്ഥിരീകരിക്കുകയും സാക്ഷ്യപ്പെടുത്തുകയും ചെയ്യുന്നു. നിങ്ങൾ മൊബൈൽ ആപ്ലിക്കേഷനിൽ ഒരു അക്കൗണ്ട് സൃഷ്ടിക്കുകയാണെങ്കിൽ, നിങ്ങളുടെ അക്കൗണ്ടിൻ്റെ സുരക്ഷ നിലനിർത്തുന്നതിനുള്ള ഉത്തരവാദിത്തം നിങ്ങൾക്കാണ്, കൂടാതെ അക്കൗണ്ടിന് കീഴിൽ സംഭവിക്കുന്ന എല്ലാ പ്രവർത്തനങ്ങളുടെയും അതുമായി ബന്ധപ്പെട്ട് സ്വീകരിക്കുന്ന മറ്റേതെങ്കിലും പ്രവർത്തനങ്ങളുടെയും പൂർണ ഉത്തരവാദിത്തം നിങ്ങൾക്കായിരിക്കും. നിങ്ങൾ സൈൻ ഇൻ ചെയ്ത് സേവനങ്ങൾ ഉപയോഗിക്കാൻ തുടങ്ങുന്നതിന് മുമ്പ് ഞങ്ങൾ പുതിയ അക്കൗണ്ടുകൾ നിരീക്ഷിക്കുകയും അവലോകനം ചെയ്യുകയും ചെയ്തേക്കാം. ഏതെങ്കിലും തരത്തിലുള്ള തെറ്റായ കോൺടാക്റ്റ് വിവരങ്ങൾ നൽകുന്നത് നിങ്ങളുടെ അക്കൗണ്ട് അവസാനിപ്പിക്കുന്നതിലേക്ക് നയിച്ചേക്കാം. നിങ്ങളുടെ അക്കൗണ്ടിൻ്റെ ഏതെങ്കിലും അനധികൃത ഉപയോഗങ്ങളെക്കുറിച്ചോ മറ്റേതെങ്കിലും സുരക്ഷാ ലംഘനങ്ങളെക്കുറിച്ചോ നിങ്ങൾ ഉടൻ ഞങ്ങളെ അറിയിക്കണം. അത്തരം പ്രവൃത്തികളുടെയോ ഒഴിവാക്കലുകളുടെയോ ഫലമായി ഉണ്ടാകുന്ന ഏതെങ്കിലും തരത്തിലുള്ള നാശനഷ്ടങ്ങൾ ഉൾപ്പെടെ, നിങ്ങളുടെ ഏതെങ്കിലും പ്രവൃത്തികൾക്കോ ഒഴിവാക്കലുകൾക്കോ ഞങ്ങൾ ബാധ്യസ്ഥരായിരിക്കില്ല. ഈ ഉടമ്പടിയിലെ ഏതെങ്കിലും വ്യവസ്ഥ നിങ്ങൾ ലംഘിച്ചുവെന്നോ നിങ്ങളുടെ പെരുമാറ്റമോ ഉള്ളടക്കമോ ഞങ്ങളുടെ പ്രശസ്തിക്കും സൽസ്വഭാവത്തിനും ഹാനികരമാകുമെന്നോ ഞങ്ങൾ നിർണ്ണയിക്കുകയാണെങ്കിൽ, ഞങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ട് (അല്ലെങ്കിൽ അതിൻ്റെ ഏതെങ്കിലും ഭാഗം) താൽക്കാലികമായി നിർത്തുകയോ പ്രവർത്തനരഹിതമാക്കുകയോ ഇല്ലാതാക്കുകയോ ചെയ്യാം. മേൽപ്പറഞ്ഞ കാരണങ്ങളാൽ ഞങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ട് ഇല്ലാതാക്കുകയാണെങ്കിൽ, ഞങ്ങളുടെ സേവനങ്ങൾക്കായി നിങ്ങൾക്ക് വീണ്ടും രജിസ്റ്റർ ചെയ്യാനാകില്ല. കൂടുതൽ രജിസ്ട്രേഷൻ തടയാൻ നിങ്ങളുടെ ഇമെയിൽ വിലാസവും ഇൻ്റർനെറ്റ് പ്രോട്ടോക്കോൾ വിലാസവും ഞങ്ങൾ ബ്ലോക്ക് ചെയ്തേക്കാം.</div>
                    <br>
                    <div>നിരോധിത ഉപയോഗങ്ങൾ</div>
                    <div>കരാറിൽ പറഞ്ഞിരിക്കുന്ന മറ്റ് നിബന്ധനകൾക്ക് പുറമേ, മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും അല്ലെങ്കിൽ ഉള്ളടക്കവും താഴെ പറയുന്ന ആവശ്യങ്ങൾക്ക് ഉപയോഗിക്കുന്നതിൽ നിന്ന് നിങ്ങളെ നിരോധിച്ചിരിക്കുന്നു: (എ) ഏതെങ്കിലും നിയമവിരുദ്ധമായ ആവശ്യത്തിന്; (ബി) നിയമവിരുദ്ധമായ എന്തെങ്കിലും പ്രവൃത്തികൾ ചെയ്യാനോ അതിൽ പങ്കെടുക്കാനോ മറ്റുള്ളവരോട് അഭ്യർത്ഥിക്കുക; (സി) ഏതെങ്കിലും അന്താരാഷ്ട്ര, ഫെഡറൽ, പ്രവിശ്യ അല്ലെങ്കിൽ സംസ്ഥാന നിയന്ത്രണങ്ങൾ, നിയമങ്ങൾ, അല്ലെങ്കിൽ പ്രാദേശിക ഓർഡിനൻസുകൾ എന്നിവ ലംഘിക്കുന്നതിന്; (ഡി) നമ്മുടെ ബൗദ്ധിക സ്വത്തവകാശം അല്ലെങ്കിൽ മറ്റുള്ളവരുടെ ബൗദ്ധിക സ്വത്തവകാശം ലംഘിക്കുകയോ ചെയ്യുക; (ഇ) ലിംഗഭേദം, ലൈംഗിക ആഭിമുഖ്യം, മതം, വംശം, &nbsp;പ്രായം, ദേശീയ ഉത്ഭവം അല്ലെങ്കിൽ വൈകല്യം എന്നിവയുടെ അടിസ്ഥാനത്തിൽ ഉപദ്രവിക്കുക, ദുരുപയോഗം ചെയ്യുക, അപമാനിക്കുക, അപകീർത്തിപ്പെടുത്തുക, ഭീഷണിപ്പെടുത്തുക, അല്ലെങ്കിൽ വിവേചനം കാണിക്കുക; (എഫ്) തെറ്റായ അല്ലെങ്കിൽ തെറ്റിദ്ധരിപ്പിക്കുന്ന വിവരങ്ങൾ സമർപ്പിക്കാൻ; (ജി) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും, മൂന്നാം കക്ഷി ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും അല്ലെങ്കിൽ ഇൻറർനെറ്റിൻ്റെയും പ്രവർത്തനത്തെയോ ഏതെങ്കിലും തരത്തിൽ ഉപയോഗിക്കുന്നതോ ആയ വൈറസുകളോ മറ്റേതെങ്കിലും തരത്തിലുള്ള ക്ഷുദ്ര കോഡുകളോ അപ്ലോഡ് ചെയ്യുകയോ കൈമാറുകയോ ചെയ്യുക; (h) സ്പാം, ഫിഷ്, ഫാം, പ്രീ ടെക്സ്റ്റ്, സ്പൈഡർ, ക്രാൾ, അല്ലെങ്കിൽ സ്ക്രാപ്പ് എന്നിവ ചെയ്യുക; (i) ഏതെങ്കിലും അശ്ലീലമോ അധാർമികമോ ആയ ഉദ്ദേശ്യങ്ങൾക്കായി ഉപയോഗിക്കുക &nbsp;(j) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും, മൂന്നാം കക്ഷി ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും അല്ലെങ്കിൽ ഇൻ്റർനെറ്റിൻ്റെ സുരക്ഷാ സവിശേഷതകളിൽ ഇടപെടുകയോ ഒഴിവാക്കുകയോ ചെയ്യുക. നിരോധിത ഉപയോഗങ്ങളിൽ ഏതെങ്കിലും ലംഘിച്ച കാരണത്താൽ മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും നിങ്ങളുടെ ഉപയോഗം അവസാനിപ്പിക്കാനുള്ള അവകാശം ഞങ്ങളിൽ നിക്ഷിപ്തമാണ്.</div>
                    <br>
                    <div>പേയ്മെന്റുകൾ</div>
                    <div>ആപ്പിലേക്കുള്ള പേയ്മെന്റുകൾ Razor Pay ഗേറ്റ്വേ വഴി മാത്രമേ നടത്താവൂ; ഉപയോക്താക്കൾക്ക് ഡെബിറ്റ് കാർഡുകൾ, ക്രെഡിറ്റ് കാർഡുകൾ, UPI അല്ലെങ്കിൽ ഗേറ്റ്വേയിൽ വ്യക്തമാക്കിയ മറ്റേതെങ്കിലും രീതികൾ ഉപയോഗിച്ച് പേയ്മെന്റ് &nbsp;നടത്താം. ഞങ്ങളുടെ വിലയേറിയ ഉപയോക്താക്കൾ എല്ലാ മാസവും 5-ാം തീയതിയോ അതിന് മുമ്പോ പേയ്മെൻ്റ് നടത്തണം. അത്തരം ബാധ്യതകൾ പരാജയപ്പെട്ടാൽ, ബഹുമാനപ്പെട്ട സ്കീമുകൾ വാഗ്ദാനം ചെയ്യുന്ന നിബന്ധനകളും വ്യവസ്ഥകളും പാലിക്കാൻ സ്കീമുകളുടെ വരിക്കാർ നിർബന്ധിതരാകും.</div>
                    <div>അവസാനിപ്പിക്കൽ</div>
                    <div>ഈ നിബന്ധനകളിലെയും വ്യവസ്ഥകളിലെയും ഏതെങ്കിലും വ്യവസ്ഥകൾ അസാധുവായതോ നടപ്പിലാക്കാൻ കഴിയാത്തതോ ആണെന്ന് കണ്ടെത്തിയാൽ, അത്തരം വ്യവസ്ഥകൾ ഈ നിബന്ധനകളിൽ നിന്നും വ്യവസ്ഥകളിൽ നിന്നും വേർപെടുത്തിയതായി കണക്കാക്കുകയും ശേഷിക്കുന്ന വ്യവസ്ഥകളുടെ സാധുതയെയും നിർവ്വഹണത്തെയും ബാധിക്കുകയുമില്ല.</div>
                    <br>
                    <div>തർക്ക പരിഹാരം</div>
                    <div>ഈ ഉടമ്പടി അതിൻ്റെ നിയമ തത്വങ്ങളുടെ വൈരുദ്ധ്യം പരിഗണിക്കാതെ, ഇന്ത്യയിലെ കേരള സംസ്ഥാനത്തിൻ്റെ നിയമങ്ങൾക്കനുസൃതമായി നിയന്ത്രിക്കപ്പെടുകയും വ്യാഖ്യാനിക്കുകയും ചെയ്യും. ഈ ഉടമ്പടി പ്രകാരം ഉണ്ടാകുന്ന തർക്കങ്ങൾക്കുള്ള അധികാരപരിധി ഇന്ത്യയിലെ കേരളത്തിലെ കോഴിക്കോട് ജില്ലാ കോടതിയിൽ മാത്രമായിരിക്കും. നിങ്ങൾ ഇതിനാൽ അത്തരം കോടതിയുടെ അധികാരപരിധി അംഗീകരിക്കുകയും ജൂറി വിചാരണയ്ക്കുള്ള ഏതെങ്കിലും അവകാശം ഒഴിവാക്കുകയും ചെയ്യുന്നു. ചരക്കുകളുടെ അന്താരാഷ്ട്ര വിൽപ്പനയ്ക്കുള്ള കരാറുകളെക്കുറിച്ചുള്ള ഐക്യരാഷ്ട്ര കൺവെൻഷൻ ബാധകമല്ല.</div>
                    <br>
                    <div>മാറ്റങ്ങളും ഭേദഗതികളും</div>
                    <div>ഞങ്ങളുടെ വിവേചനാധികാരത്തിൽ ഏത് സമയത്തും മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളുമായി ബന്ധപ്പെട്ട ഈ കരാറോ അതിൻ്റെ നിബന്ധനകളോ പരിഷ്കരിക്കാനുള്ള അവകാശം ഞങ്ങളിൽ നിക്ഷിപ്തമാണ്. ഞങ്ങൾ ഇത് ചെയ്യുമ്പോൾ, ഞങ്ങൾ മൊബൈൽ ആപ്ലിക്കേഷനിൽ ഒരു അറിയിപ്പ് പോസ്റ്റ് ചെയ്യും. നിങ്ങൾ നൽകിയ കോൺടാക്റ്റ് വിവരങ്ങൾ പോലെ, ഞങ്ങളുടെ വിവേചനാധികാരത്തിൽ മറ്റ് മാർഗങ്ങളിലൂടെയും ഞങ്ങൾ നിങ്ങൾക്ക് അറിയിപ്പ് നൽകിയേക്കാം.</div>
                    <div>ഈ ഉടമ്പടിയുടെ അപ്ഡേറ്റ് ചെയ്ത പതിപ്പ്, വ്യക്തമാക്കിയിട്ടില്ലെങ്കിൽ, പുതുക്കിയ ഉടമ്പടി പോസ്റ്റുചെയ്യുമ്പോൾ ഉടനടി പ്രാബല്യത്തിൽ വരും. പുതുക്കിയ ഉടമ്പടി പ്രാബല്യത്തിൽ വരുന്ന തീയതിക്ക് ശേഷം (അല്ലെങ്കിൽ ആ സമയത്ത് വ്യക്തമാക്കിയ മറ്റ് ആക്റ്റ്) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും നിങ്ങളുടെ തുടർച്ചയായ ഉപയോഗം ആ മാറ്റങ്ങൾക്ക് നിങ്ങളുടെ സമ്മതം നൽകിയതായി പരിഗണിക്കും.</div>
                    <br>
                    <div>ഈ നിബന്ധനകളുടെ സ്വീകാര്യത</div>
                    <div>നിങ്ങൾ ഈ ഉടമ്പടി വായിച്ചതായി സമ്മതിക്കുകയും അതിൻ്റെ എല്ലാ നിബന്ധനകളും വ്യവസ്ഥകളും അംഗീകരിക്കുകയും ചെയ്യുന്നു. മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ആക്സസ് ചെയ്യുന്നതിലൂടെയും ഉപയോഗിക്കുന്നതിലൂടെയും നിങ്ങൾ ഈ ഉടമ്പടിക്ക് വിധേയരാണെന്ന് സമ്മതിക്കുന്നു. ഈ കരാറിൻ്റെ നിബന്ധനകൾ പാലിക്കാൻ നിങ്ങൾ സമ്മതിക്കുന്നില്ലെങ്കിൽ, മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ആക്സസ് ചെയ്യാനോ ഉപയോഗിക്കാനോ നിങ്ങൾക്ക് അധികാരമില്ല.</div>
                    <br>
                    <div>ഞങ്ങളെ ബന്ധപ്പെടുന്നതിന്</div>
                    <div>ഈ കരാറുമായി ബന്ധപ്പെട്ട് നിങ്ങൾക്ക് എന്തെങ്കിലും ചോദ്യങ്ങളോ ആശങ്കകളോ പരാതികളോ ഉണ്ടെങ്കിൽ, ചുവടെയുള്ള വിശദാംശങ്ങൾ ഉപയോഗിച്ച് ഞങ്ങളെ ബന്ധപ്പെ ടാവുന്നതാണ്. madhurimagold@gmail.com</div>
                    <div>ഈ ഡോക്യുമെൻ്റ് അവസാനം അപ്ഡേറ്റ് ചെയ്തത് 2024 ഡിസംബർ 12 നാണ്</div>
                </div>',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'title_en' => 'Flexible Payment Scheme',
                'title_ml' => 'ഫ്ലെക്സിബിൾ പെയ്മെന്റ് പദ്ധതി',
                'total_period' => '11',
                'scheme_type_id' => SchemeType::FLEXIBLE_PLAN,
                'payment_terms_en' => '<div>
                    <div>Duration of all schemes is 11 months. Payments are due on a monthly basis, and to keep the package active, customers must make their monthly payments between the 1st and 5th of each month. If payment is not received by the 5th, the package will get terminated, and the customer will no longer be eligible to continue the scheme. If the package gets terminated due to non-payment of installment in time, the total amount remitted so far could be withdrawn at the end of the maturation period of the scheme in cash or gold, without any offer.</div>
                </div>',
                'payment_terms_ml' => '<div>
                    <div>ഈ നിശ്ചിത പ്രതിമാസ ഗഡു പദ്ധതി പ്രകാരം, അടയ്ക്കേണ്ട തുക ഓരോ മാസവും സ്ഥിരമായിരിക്കും. പ്രതിമാസ അടവുകൾ 1-ാം തീയതി മുതൽ 5-ാം തീയതിക്കുള്ളിൽ അടയ്ക്കണം. 5-ാം തീയതിക്കുള്ളിൽ അടവുകൾ ലഭിക്കാത്ത പക്ഷം, പാക്കേജ് നിർത്തലാക്കുകയും, ഉപഭോക്താക്കൾക്ക് ഈ പദ്ധതിയിൽ തുടരുവാനുള്ള യോഗ്യത നഷ്ടപ്പെടുകയും ചെയ്യും. പദ്ധതി കാലയളവ് കരാറനുസരിച്ച് വ്യത്യാസപ്പെടാം, എന്നാൽ മാസവേതന തുക കരാറിന്റെ മുഴുവൻ കാലയളവിലും ഒരേപോലെയായിരിക്കും.</div>
                </div>',
                'description_en' => '<div>
                    <div>Duration of Flexible Payment Scheme is 11 months.</div>
                    <div>&nbsp; &nbsp; ● The monthly installment amount is flexible and can be determined by the user for the first the 6 months. From the 7th month, the installment will be fixed based on the median of all amounts paid in the first six months. For example, if the total amount is Rs 50,000, the installment cannot exceed Rs 8,333 but can be less.</div>
                    <div>&nbsp; &nbsp; ● In the 12th month, users can purchase gold jewelry free of making charges from Madhurima Gold and Diamonds (designs include Kolkata, Turkish, Bombay, Kerala, Nagas, and more).</div>
                    <div>&nbsp; &nbsp; ● If installments are not paid before the 5th of each month, the package will get terminated and the customers will lose the privilege to avail offers. The total amount remitted so far could be withdrawn in cash or as gold purchases at the end of the scheme period on the 12th month without any offers.</div>
                    <div>&nbsp; &nbsp; ● Payments must be made exclusively through the Madhurima Gold and Diamonds app for security and transparency.</div>
                    <div>&nbsp; &nbsp; ● Gold rates will be based on the "current rates" at the end of the scheme (12th month).</div>
                    <div>&nbsp; &nbsp; ● All disputes will be resolved under the jurisdiction of Kozhikode District Court. Current tax and revenue policies are applicable.</div>
                </div>',
                'description_ml' => '<div>
                    <div>ഫ്ലെക്സിബിൾ പെയ്മെന്റ് പദ്ധതിയുടെ കാലാവധി 11 മാസം ആയിരിക്കും.</div>
                    <div>&nbsp; &nbsp; ● കാലാവധി പൂർത്തിയായ ശേഷം 12-ാം മാസം ഉപയോക്താക്കൾക്ക് മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമൻഡ്സ് ജുവല്ലറിയിൽ നിന്നും ഏത് സ്വർണാഭരണങ്ങൾ ആയാലും (കോൽക്കത്ത, ടർക്കിഷ്, ബോംബെ, കേരള, നാഗാസ് തുടങ്ങിയ ഡിസൈനുകൾ ഉൾപ്പെടെ) പണിക്കൂലി ഇല്ലാതെ വാങ്ങാവുന്നതാണ്.</div>
                    <div>&nbsp; &nbsp; ● അടവുകൾ ആദ്യത്തെ 6 മാസങ്ങൾ വരെ പരിധിയില്ലാതെ അടക്കാവുന്നതാണ് (മാസത്തിൽ ഒരു തവണ മാത്രം അടക്കുക). ഏഴാം മാസം മുതൽ തവണ സംഖ്യ, ആദ്യ 6 മാസങ്ങളിൽ അടച്ച തുകയുടെ മധ്യമാനം (median) അടിസ്ഥാനമാക്കി നിർണ്ണയിക്കും. ഉദാഹരണത്തിന്, മൊത്തം തുക ₹50,000 ആണെങ്കിൽ, 7-ാം മാസം മുതൽ പരമാവധി അടക്കാൻ കഴിയുന്ന തുക ₹8,333 ആയിരിക്കും. തുക ₹8,333 ഇൽ കുറയുന്നതിൽ പ്രശ്നമില്ല.</div>
                    <div>&nbsp; &nbsp; ● പ്രതിമാസം 5-ാം തീയതി മുതൽ മുൻപ് അടവ് അടച്ചില്ലെങ്കിൽ, ഉപഭോക്താക്കൾക്ക് കുറിയിൽ തുടരുന്നതിനുള്ള യോഗ്യത നഷ്ടപ്പെടും. തവണ അടവിൽ വീഴ്ച്ച വരുത്തിയാൽ കുറിയുടെ മൊത്തം കാലാവധി കഴിഞ്ഞു അടച്ച തുക പണമായോ സ്വർണ്ണമായോ 11 മാസത്തെ ഓഫർ ഇല്ലാതെ വാങ്ങാവുന്നതാണ്.</div>
                    <br>
                    <div>&nbsp; &nbsp; ● സുരക്ഷയ്ക്കും സുതാര്യതക്കും വേണ്ടി അടവുകൾ നിർബന്ധമായും കുറി ആപ്പ് വഴി മാത്രം അടക്കേണ്ടതാണ്.</div>
                    <div>&nbsp; &nbsp; ● സ്കീം കാലാവധി അവസാനിക്കുന്ന ദിവസത്തെ സ്വർണ്ണ വിലയാണ് പരിഗണിക്കുക. ഉദാഹരണത്തിന് മാസം 1-ാം തീയതി ആണ് സ്കീം തുടങ്ങിയതെങ്കിൽ 12-ാം മാസം 1-ാം തീയതിയിലെ സ്വർണ്ണ വിലയായിരിക്കും പരിഗണിക്കുക.</div>
                    <div>&nbsp; &nbsp; ● ഈ പദ്ധതിയുടെ എല്ലാ തർക്കങ്ങളും കോഴിക്കോട് ജില്ലാ കോടതിയുടെ അധികാര പരിധിയിൽ ആയിരിക്കും. ഈ പദ്ധതി സർക്കാരിന്റെ കാലാകാലങ്ങളായുള്ള നയവ്യതിയാനങ്ങൾക്കും നിബന്ധനകൾക്കും വിധേയമായിരിക്കും.</div>
                </div>',
                'terms_and_coniditions_en' => '<div>
                    <div>These terms and conditions (&ldquo;Agreement&rdquo;) set forth the general terms and conditions of your use of the &ldquo;Madhurima Gold and Diamonds App&rdquo; mobile application (&ldquo;Mobile Application&rdquo; or &ldquo;Service&rdquo;) and any of its related products and services (collectively, &ldquo;Services&rdquo;). This Agreement is legally binding between you (&ldquo;User&rdquo;, &ldquo;you&rdquo; or &ldquo;your&rdquo;) and Madhurima Gold and Diamonds (with address 59/2 Railway Station Road, Mele Palayam, Kozhikode, PIN - 673001) (&ldquo;Madhurima Gold and Diamonds&rdquo;, &ldquo;we&rdquo;, &ldquo;us&rdquo; or &ldquo;our&rdquo;). If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such an entity to this Agreement, in which case the terms &ldquo;User&rdquo;, &ldquo;you&rdquo; or &ldquo;your&rdquo; shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Mobile Application and Services. By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. You acknowledge that this Agreement is a contract between you and Madhurima Gold and Diamonds, even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services.</div>
                    <div>Table of contents</div>
                    <div>Accounts and membership</div>
                    <div>Links to other resources</div>
                    <div>Prohibited uses</div>
                    <div>Payments</div>
                    <div>Severability</div>
                    <div>Dispute resolution</div>
                    <div>Changes and amendments</div>
                    <div>Acceptance of these terms</div>
                    <div>Contacting us</div>
                    <div>Accounts and membership</div>
                    <div>You must be at least 18 years of age to use the Mobile Application and Services. By using the Mobile Application and Services and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account in the Mobile Application, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and start using the Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</div>
                    <div>Links to other resources</div>
                    <div>Although the Mobile Application and Services may link to other resources (such as websites, mobile applications, etc.), we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked resource, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of any businesses or individuals or the content of their resources. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any resource which you access through a link in the Mobile Application. Your linking to any other off-site resources is at your own risk.</div>
                    <div>Prohibited uses</div>
                    <div>In addition to other terms as set forth in the Agreement, you are prohibited from using the Mobile Application and Services or Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Mobile Application and Services, third party products and services, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Mobile Application and Services, third party products and services, or the Internet. We reserve the right to terminate your use of the Mobile Application and Services for violating any of the prohibited uses.</div>
                    <div>Payments</div>
                    <div>Payments to the app should be made only through Razor Pay; users can make the payment using debit cards, credit cards, UPI, or any other methods specified in the gateway. Our valuable users should make the payment on or before the 5th of every month. In the failure of such obligations, the subscribers of schemes would be compelled to follow whatever terms and conditions the respected schemes have to offer.</div>
                    <div>Severability</div>
                    <div>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid, or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</div>
                    <div>Dispute resolution</div>
                    <div>The formation, interpretation, and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Kerala, India without regard to its rules on conflicts or choice of law and, to the extent applicable, the laws of India. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be the District Court located in Kozhikode, Kerala, India, and you hereby submit to the personal jurisdiction of the court. You hereby waive any right to a jury trial in any proceeding arising out of or related to this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.</div>
                    <div>Changes and amendments</div>
                    <div>We reserve the right to modify this Agreement or its terms related to the Mobile Application and Services at any time at our discretion. When we do, we will post a notification in the Mobile Application. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.</div>
                    <div>An updated version of this Agreement will be effective immediately upon the posting of the revised Agreement unless otherwise specified. Your continued use of the Mobile Application and Services after the effective date of the revised Agreement (or such other act specified at that time) will constitute your consent to those changes.</div>
                    <div>Acceptance of these terms</div>
                    <div>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By accessing and using the Mobile Application and Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to access or use the Mobile Application and Services.</div>
                    <div>Contacting us</div>
                    <div>If you have any questions, concerns, or complaints regarding this Agreement, we encourage you to contact us using the details below:</div>
                    <div>madhurimagold@gmail.com</div>
                    <div>This document was last updated on December 12, 2024.</div>
                </div>',
                'terms_and_coniditions_ml' => '<div>
                    <div>ഫ്ലെക്സിബിൾ പെയ്മെന്റ് പദ്ധതി, നിബന്ധനകളും വ്യവസ്ഥകളും.</div>
                    <div>ഈ നിബന്ധനകളും വ്യവസ്ഥകളും മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമണ്ട്സ് (വിലാസം 59/2 റെയിൽവേ സ്റ്റേഷൻ റോഡ്, മേലെ പാളയം, കോഴിക്കോട്, പിൻ - 673001) (&ldquo;ഇനിമുതൽ "മധുരിമ ഗോൾഡ് &amp; ഡയമണ്ട്സ്" അല്ലെങ്കിൽ "ഞങ്ങൾ" അല്ലെങ്കിൽ "ഞങ്ങളുടെ" എന്ന് വിളിക്കുന്നു) വികസിപ്പിച്ചതും നൽകുന്നതും ആയ "മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമണ്ട്സ് ആപ്പ്" ("മൊബൈൽ ആപ്ലിക്കേഷൻ" അല്ലെങ്കിൽ "സേവനം") എന്നിവയുടെ ഉപയോഗത്തെയും അതിൻ്റെ ഏതെങ്കിലും അനുബന്ധ ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും (മൊത്തം, "സേവനങ്ങൾ") നിയന്ത്രിക്കുന്നതിന് വേണ്ടി യുള്ളതാണ്.</div>
                    <br>
                    <div>നിബന്ധനകളുടെ സ്വീകാര്യത</div>
                    <br>
                    <div>ആപ്പ് ആക്സസ് ചെയ്യുകയോ ഡൗൺലോഡ് ചെയ്യുകയോ ഇൻസ്റ്റാൾ ചെയ്യുകയോ ഉപയോഗിക്കുകയോ ചെയ്യുന്നതിലൂടെ, നിങ്ങൾ (ഇനിമുതൽ "ഉപയോക്താവ്" അല്ലെങ്കിൽ "നിങ്ങൾ" എന്ന് വിളിക്കപ്പെടുന്നു) ഈ ഉടമ്പടിയുടെ നിബന്ധനകൾ വായിക്കുകയും മനസ്സിലാക്കുകയും അംഗീകരിക്കുകയും ചെയ്യുന്നുവെന്നും നിങ്ങൾ അംഗീകരിക്കുന്നു. &nbsp;ഈ ഉടമ്പടി നിങ്ങൾ ഒപ്പിട്ടിട്ടില്ലെങ്കിലും ഇലക്ട്രോണിക് രീതിയിൽ നടപ്പിലാക്കിയാലും, നിങ്ങളും മധുരിമ ഗോൾഡ് &amp; ഡയമണ്ട്സും തമ്മിലുള്ള നിയമപരമായ കരാറാണ് ഈ കരാർ എന്ന് നിങ്ങൾ സമ്മതിക്കുന്നു. ഈ നിബന്ധനകളും വ്യവസ്ഥകളും നിങ്ങൾ അംഗീകരിക്കുന്നില്ലെങ്കിൽ, ആപ്പ് ഡൗൺലോഡ് ചെയ്യുകയോ ഇൻസ്റ്റാൾ ചെയ്യുകയോ ഉപയോഗിക്കുകയോ ചെയ്യരുത്.</div>
                    <br>
                    <div>ഉള്ളടക്ക പട്ടിക</div>
                    <div>അക്കൗണ്ടുകളും അംഗത്വവും</div>
                    <div>നിരോധിത ഉപയോഗങ്ങൾ</div>
                    <div>പേയ്മെൻ്റുകൾ</div>
                    <div>വേർപിരിയൽ</div>
                    <div>തർക്ക പരിഹാരം</div>
                    <div>മാറ്റങ്ങളും ഭേദഗതികളും</div>
                    <div>ഞങ്ങളെ ബന്ധപ്പെടുന്നതിന്</div>
                    <br>
                    <div>സ്ഥിരീകരിക്കുകയും സാക്ഷ്യപ്പെടുത്തുകയും ചെയ്യുന്നു</div>
                    <div>അക്കൗണ്ടുകളും അംഗത്വവും</div>
                    <div>മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ഉപയോഗിക്കുന്നതിന് നിങ്ങൾക്ക് കുറഞ്ഞത് 18 വയസ്സ് പ്രായമുണ്ടായിരിക്കണം. മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ഉപയോഗിക്കുന്നതിലൂടെയും ഈ ഉടമ്പടി അംഗീകരിക്കുന്നതിലൂടെയും നിങ്ങൾക്ക് കുറഞ്ഞത് 18 വയസ്സ് പ്രായമുണ്ടെന്ന് നിങ്ങൾ സ്ഥിരീകരിക്കുകയും സാക്ഷ്യപ്പെടുത്തുകയും ചെയ്യുന്നു. നിങ്ങൾ മൊബൈൽ ആപ്ലിക്കേഷനിൽ ഒരു അക്കൗണ്ട് സൃഷ്ടിക്കുകയാണെങ്കിൽ, നിങ്ങളുടെ അക്കൗണ്ടിൻ്റെ സുരക്ഷ നിലനിർത്തുന്നതിനുള്ള ഉത്തരവാദിത്തം നിങ്ങൾക്കാണ്, കൂടാതെ അക്കൗണ്ടിന് കീഴിൽ സംഭവിക്കുന്ന എല്ലാ പ്രവർത്തനങ്ങളുടെയും അതുമായി ബന്ധപ്പെട്ട് സ്വീകരിക്കുന്ന മറ്റേതെങ്കിലും പ്രവർത്തനങ്ങളുടെയും പൂർണ ഉത്തരവാദിത്തം നിങ്ങൾക്കായിരിക്കും. നിങ്ങൾ സൈൻ ഇൻ ചെയ്ത് സേവനങ്ങൾ ഉപയോഗിക്കാൻ തുടങ്ങുന്നതിന് മുമ്പ് ഞങ്ങൾ പുതിയ അക്കൗണ്ടുകൾ നിരീക്ഷിക്കുകയും അവലോകനം ചെയ്യുകയും ചെയ്തേക്കാം. ഏതെങ്കിലും തരത്തിലുള്ള തെറ്റായ കോൺടാക്റ്റ് വിവരങ്ങൾ നൽകുന്നത് നിങ്ങളുടെ അക്കൗണ്ട് അവസാനിപ്പിക്കുന്നതിലേക്ക് നയിച്ചേക്കാം. നിങ്ങളുടെ അക്കൗണ്ടിൻ്റെ ഏതെങ്കിലും അനധികൃത ഉപയോഗങ്ങളെക്കുറിച്ചോ മറ്റേതെങ്കിലും സുരക്ഷാ ലംഘനങ്ങളെക്കുറിച്ചോ നിങ്ങൾ ഉടൻ ഞങ്ങളെ അറിയിക്കണം. അത്തരം പ്രവൃത്തികളുടെയോ ഒഴിവാക്കലുകളുടെയോ ഫലമായി ഉണ്ടാകുന്ന ഏതെങ്കിലും തരത്തിലുള്ള നാശനഷ്ടങ്ങൾ ഉൾപ്പെടെ, നിങ്ങളുടെ ഏതെങ്കിലും പ്രവൃത്തികൾക്കോ ഒഴിവാക്കലുകൾക്കോ ഞങ്ങൾ ബാധ്യസ്ഥരായിരിക്കില്ല. ഈ ഉടമ്പടിയിലെ ഏതെങ്കിലും വ്യവസ്ഥ നിങ്ങൾ ലംഘിച്ചുവെന്നോ നിങ്ങളുടെ പെരുമാറ്റമോ ഉള്ളടക്കമോ ഞങ്ങളുടെ പ്രശസ്തിക്കും സൽസ്വഭാവത്തിനും ഹാനികരമാകുമെന്നോ ഞങ്ങൾ നിർണ്ണയിക്കുകയാണെങ്കിൽ, ഞങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ട് (അല്ലെങ്കിൽ അതിൻ്റെ ഏതെങ്കിലും ഭാഗം) താൽക്കാലികമായി നിർത്തുകയോ പ്രവർത്തനരഹിതമാക്കുകയോ ഇല്ലാതാക്കുകയോ ചെയ്യാം. മേൽപ്പറഞ്ഞ കാരണങ്ങളാൽ ഞങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ട് ഇല്ലാതാക്കുകയാണെങ്കിൽ, ഞങ്ങളുടെ സേവനങ്ങൾക്കായി നിങ്ങൾക്ക് വീണ്ടും രജിസ്റ്റർ ചെയ്യാനാകില്ല. കൂടുതൽ രജിസ്ട്രേഷൻ തടയാൻ നിങ്ങളുടെ ഇമെയിൽ വിലാസവും ഇൻ്റർനെറ്റ് പ്രോട്ടോക്കോൾ വിലാസവും ഞങ്ങൾ ബ്ലോക്ക് ചെയ്തേക്കാം.</div>
                    <br>
                    <div>നിരോധിത ഉപയോഗങ്ങൾ</div>
                    <div>കരാറിൽ പറഞ്ഞിരിക്കുന്ന മറ്റ് നിബന്ധനകൾക്ക് പുറമേ, മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും അല്ലെങ്കിൽ ഉള്ളടക്കവും താഴെ പറയുന്ന ആവശ്യങ്ങൾക്ക് ഉപയോഗിക്കുന്നതിൽ നിന്ന് നിങ്ങളെ നിരോധിച്ചിരിക്കുന്നു: (എ) ഏതെങ്കിലും നിയമവിരുദ്ധമായ ആവശ്യത്തിന്; (ബി) നിയമവിരുദ്ധമായ എന്തെങ്കിലും പ്രവൃത്തികൾ ചെയ്യാനോ അതിൽ പങ്കെടുക്കാനോ മറ്റുള്ളവരോട് അഭ്യർത്ഥിക്കുക; (സി) ഏതെങ്കിലും അന്താരാഷ്ട്ര, ഫെഡറൽ, പ്രവിശ്യ അല്ലെങ്കിൽ സംസ്ഥാന നിയന്ത്രണങ്ങൾ, നിയമങ്ങൾ, അല്ലെങ്കിൽ പ്രാദേശിക ഓർഡിനൻസുകൾ എന്നിവ ലംഘിക്കുന്നതിന്; (ഡി) നമ്മുടെ ബൗദ്ധിക സ്വത്തവകാശം അല്ലെങ്കിൽ മറ്റുള്ളവരുടെ ബൗദ്ധിക സ്വത്തവകാശം ലംഘിക്കുകയോ ചെയ്യുക; (ഇ) ലിംഗഭേദം, ലൈംഗിക ആഭിമുഖ്യം, മതം, വംശം, &nbsp;പ്രായം, ദേശീയ ഉത്ഭവം അല്ലെങ്കിൽ വൈകല്യം എന്നിവയുടെ അടിസ്ഥാനത്തിൽ ഉപദ്രവിക്കുക, ദുരുപയോഗം ചെയ്യുക, അപമാനിക്കുക, അപകീർത്തിപ്പെടുത്തുക, ഭീഷണിപ്പെടുത്തുക, അല്ലെങ്കിൽ വിവേചനം കാണിക്കുക; (എഫ്) തെറ്റായ അല്ലെങ്കിൽ തെറ്റിദ്ധരിപ്പിക്കുന്ന വിവരങ്ങൾ സമർപ്പിക്കാൻ; (ജി) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും, മൂന്നാം കക്ഷി ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും അല്ലെങ്കിൽ ഇൻറർനെറ്റിൻ്റെയും പ്രവർത്തനത്തെയോ ഏതെങ്കിലും തരത്തിൽ ഉപയോഗിക്കുന്നതോ ആയ വൈറസുകളോ മറ്റേതെങ്കിലും തരത്തിലുള്ള ക്ഷുദ്ര കോഡുകളോ അപ്ലോഡ് ചെയ്യുകയോ കൈമാറുകയോ ചെയ്യുക; (h) സ്പാം, ഫിഷ്, ഫാം, പ്രീ ടെക്സ്റ്റ്, സ്പൈഡർ, ക്രാൾ, അല്ലെങ്കിൽ സ്ക്രാപ്പ് എന്നിവ ചെയ്യുക; (i) ഏതെങ്കിലും അശ്ലീലമോ അധാർമികമോ ആയ ഉദ്ദേശ്യങ്ങൾക്കായി ഉപയോഗിക്കുക &nbsp;(j) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും, മൂന്നാം കക്ഷി ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും അല്ലെങ്കിൽ ഇൻ്റർനെറ്റിൻ്റെ സുരക്ഷാ സവിശേഷതകളിൽ ഇടപെടുകയോ ഒഴിവാക്കുകയോ ചെയ്യുക. നിരോധിത ഉപയോഗങ്ങളിൽ ഏതെങ്കിലും ലംഘിച്ച കാരണത്താൽ മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും നിങ്ങളുടെ ഉപയോഗം അവസാനിപ്പിക്കാനുള്ള അവകാശം ഞങ്ങളിൽ നിക്ഷിപ്തമാണ്.</div>
                    <br>
                    <div>പേയ്മെന്റുകൾ</div>
                    <div>ആപ്പിലേക്കുള്ള പേയ്മെന്റുകൾ Razor Pay ഗേറ്റ്വേ വഴി മാത്രമേ നടത്താവൂ; ഉപയോക്താക്കൾക്ക് ഡെബിറ്റ് കാർഡുകൾ, ക്രെഡിറ്റ് കാർഡുകൾ, UPI അല്ലെങ്കിൽ ഗേറ്റ്വേയിൽ വ്യക്തമാക്കിയ മറ്റേതെങ്കിലും രീതികൾ ഉപയോഗിച്ച് പേയ്മെന്റ് &nbsp;നടത്താം. ഞങ്ങളുടെ വിലയേറിയ ഉപയോക്താക്കൾ എല്ലാ മാസവും 5-ാം തീയതിയോ അതിന് മുമ്പോ പേയ്മെൻ്റ് നടത്തണം. അത്തരം ബാധ്യതകൾ പരാജയപ്പെട്ടാൽ, ബഹുമാനപ്പെട്ട സ്കീമുകൾ വാഗ്ദാനം ചെയ്യുന്ന നിബന്ധനകളും വ്യവസ്ഥകളും പാലിക്കാൻ സ്കീമുകളുടെ വരിക്കാർ നിർബന്ധിതരാകും.</div>
                    <div>അവസാനിപ്പിക്കൽ</div>
                    <div>ഈ നിബന്ധനകളിലെയും വ്യവസ്ഥകളിലെയും ഏതെങ്കിലും വ്യവസ്ഥകൾ അസാധുവായതോ നടപ്പിലാക്കാൻ കഴിയാത്തതോ ആണെന്ന് കണ്ടെത്തിയാൽ, അത്തരം വ്യവസ്ഥകൾ ഈ നിബന്ധനകളിൽ നിന്നും വ്യവസ്ഥകളിൽ നിന്നും വേർപെടുത്തിയതായി കണക്കാക്കുകയും ശേഷിക്കുന്ന വ്യവസ്ഥകളുടെ സാധുതയെയും നിർവ്വഹണത്തെയും ബാധിക്കുകയുമില്ല.</div>
                    <br>
                    <div>തർക്ക പരിഹാരം</div>
                    <div>ഈ ഉടമ്പടി അതിൻ്റെ നിയമ തത്വങ്ങളുടെ വൈരുദ്ധ്യം പരിഗണിക്കാതെ, ഇന്ത്യയിലെ കേരള സംസ്ഥാനത്തിൻ്റെ നിയമങ്ങൾക്കനുസൃതമായി നിയന്ത്രിക്കപ്പെടുകയും വ്യാഖ്യാനിക്കുകയും ചെയ്യും. ഈ ഉടമ്പടി പ്രകാരം ഉണ്ടാകുന്ന തർക്കങ്ങൾക്കുള്ള അധികാരപരിധി ഇന്ത്യയിലെ കേരളത്തിലെ കോഴിക്കോട് ജില്ലാ കോടതിയിൽ മാത്രമായിരിക്കും. നിങ്ങൾ ഇതിനാൽ അത്തരം കോടതിയുടെ അധികാരപരിധി അംഗീകരിക്കുകയും ജൂറി വിചാരണയ്ക്കുള്ള ഏതെങ്കിലും അവകാശം ഒഴിവാക്കുകയും ചെയ്യുന്നു. ചരക്കുകളുടെ അന്താരാഷ്ട്ര വിൽപ്പനയ്ക്കുള്ള കരാറുകളെക്കുറിച്ചുള്ള ഐക്യരാഷ്ട്ര കൺവെൻഷൻ ബാധകമല്ല.</div>
                    <br>
                    <div>മാറ്റങ്ങളും ഭേദഗതികളും</div>
                    <div>ഞങ്ങളുടെ വിവേചനാധികാരത്തിൽ ഏത് സമയത്തും മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളുമായി ബന്ധപ്പെട്ട ഈ കരാറോ അതിൻ്റെ നിബന്ധനകളോ പരിഷ്കരിക്കാനുള്ള അവകാശം ഞങ്ങളിൽ നിക്ഷിപ്തമാണ്. ഞങ്ങൾ ഇത് ചെയ്യുമ്പോൾ, ഞങ്ങൾ മൊബൈൽ ആപ്ലിക്കേഷനിൽ ഒരു അറിയിപ്പ് പോസ്റ്റ് ചെയ്യും. നിങ്ങൾ നൽകിയ കോൺടാക്റ്റ് വിവരങ്ങൾ പോലെ, ഞങ്ങളുടെ വിവേചനാധികാരത്തിൽ മറ്റ് മാർഗങ്ങളിലൂടെയും ഞങ്ങൾ നിങ്ങൾക്ക് അറിയിപ്പ് നൽകിയേക്കാം.</div>
                    <div>ഈ ഉടമ്പടിയുടെ അപ്ഡേറ്റ് ചെയ്ത പതിപ്പ്, വ്യക്തമാക്കിയിട്ടില്ലെങ്കിൽ, പുതുക്കിയ ഉടമ്പടി പോസ്റ്റുചെയ്യുമ്പോൾ ഉടനടി പ്രാബല്യത്തിൽ വരും. പുതുക്കിയ ഉടമ്പടി പ്രാബല്യത്തിൽ വരുന്ന തീയതിക്ക് ശേഷം (അല്ലെങ്കിൽ ആ സമയത്ത് വ്യക്തമാക്കിയ മറ്റ് ആക്റ്റ്) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും നിങ്ങളുടെ തുടർച്ചയായ ഉപയോഗം ആ മാറ്റങ്ങൾക്ക് നിങ്ങളുടെ സമ്മതം നൽകിയതായി പരിഗണിക്കും.</div>
                    <br>
                    <div>ഈ നിബന്ധനകളുടെ സ്വീകാര്യത</div>
                    <div>നിങ്ങൾ ഈ ഉടമ്പടി വായിച്ചതായി സമ്മതിക്കുകയും അതിൻ്റെ എല്ലാ നിബന്ധനകളും വ്യവസ്ഥകളും അംഗീകരിക്കുകയും ചെയ്യുന്നു. മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ആക്സസ് ചെയ്യുന്നതിലൂടെയും ഉപയോഗിക്കുന്നതിലൂടെയും നിങ്ങൾ ഈ ഉടമ്പടിക്ക് വിധേയരാണെന്ന് സമ്മതിക്കുന്നു. ഈ കരാറിൻ്റെ നിബന്ധനകൾ പാലിക്കാൻ നിങ്ങൾ സമ്മതിക്കുന്നില്ലെങ്കിൽ, മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ആക്സസ് ചെയ്യാനോ ഉപയോഗിക്കാനോ നിങ്ങൾക്ക് അധികാരമില്ല.</div>
                    <br>
                    <div>ഞങ്ങളെ ബന്ധപ്പെടുന്നതിന്</div>
                    <div>ഈ കരാറുമായി ബന്ധപ്പെട്ട് നിങ്ങൾക്ക് എന്തെങ്കിലും ചോദ്യങ്ങളോ ആശങ്കകളോ പരാതികളോ ഉണ്ടെങ്കിൽ, ചുവടെയുള്ള വിശദാംശങ്ങൾ ഉപയോഗിച്ച് ഞങ്ങളെ ബന്ധപ്പെ ടാവുന്നതാണ്. madhurimagold@gmail.com</div>
                    <div>ഈ ഡോക്യുമെൻ്റ് അവസാനം അപ്ഡേറ്റ് ചെയ്തത് 2024 ഡിസംബർ 12 നാണ്</div>
                </div>',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title_en' => 'Easy Gold Scheme',
                'title_ml' => 'സ്വർണ്ണ പെയ്മെന്റ് പദ്ധതി',
                'total_period' => '11',
                'scheme_type_id' => SchemeType::GOLD_PLAN,
                'payment_terms_en' => '<div>
                    <div>Duration of all schemes is 11 months. Payments are due on a monthly basis, and to keep the package active, customers must make their monthly payments between the 1st and 5th of each month. If payment is not received by the 5th, the package will get terminated, and the customer will no longer be eligible to continue the scheme. If the package gets terminated due to non-payment of installment in time, the total amount remitted so far could be withdrawn at the end of the maturation period of the scheme in cash or gold, without any offer.</div>
                </div>',
                'payment_terms_ml' => '<div>
                    <div>ഈ നിശ്ചിത പ്രതിമാസ ഗഡു പദ്ധതി പ്രകാരം, അടയ്ക്കേണ്ട തുക ഓരോ മാസവും സ്ഥിരമായിരിക്കും. പ്രതിമാസ അടവുകൾ 1-ാം തീയതി മുതൽ 5-ാം തീയതിക്കുള്ളിൽ അടയ്ക്കണം. 5-ാം തീയതിക്കുള്ളിൽ അടവുകൾ ലഭിക്കാത്ത പക്ഷം, പാക്കേജ് നിർത്തലാക്കുകയും, ഉപഭോക്താക്കൾക്ക് ഈ പദ്ധതിയിൽ തുടരുവാനുള്ള യോഗ്യത നഷ്ടപ്പെടുകയും ചെയ്യും. പദ്ധതി കാലയളവ് കരാറനുസരിച്ച് വ്യത്യാസപ്പെടാം, എന്നാൽ മാസവേതന തുക കരാറിന്റെ മുഴുവൻ കാലയളവിലും ഒരേപോലെയായിരിക്കും.</div>
                </div>',
                'description_en' => '<div>
                    <div>Duration of Easy Gold Scheme is 11 months.</div>
                    <div>&nbsp; &nbsp; ● The monthly installment amount is flexible and can be determined for the first 6 months. From the 7th month, the installment will be fixed based on the median of all amounts paid in the first six months. For example, if the total amount is Rs 50,000, the installment cannot exceed Rs 8,333 but can be less. The amount remitted on each month will be converted into gold based on the current gold rate of the date of payment.</div>
                    <div>&nbsp; &nbsp; ● In the 12th month, users can purchase gold jewelry free of making charges from Madhurima Gold and Diamonds (designs include Kolkata, Turkish, Bombay, Kerala, Nagas, and more).</div>
                    <div>&nbsp; &nbsp; ● Each Installment amounts will reflect current gold rates on the day of payment.</div>
                    <div>&nbsp; &nbsp; ● If installments are not paid before the 5th of each month, the package will get terminated and the customers will lose the privilege to avail offers. The total amount remitted so far could be withdrawn in cash or as gold purchases at the end of the scheme period on the 12th month without any offers.</div>
                    <div>&nbsp; &nbsp; ● Payments must be made exclusively through the Madhurima Gold and Diamonds app for security and transparency.</div>
                    <div>&nbsp; &nbsp; ● Gold rates will be based on the "current rates" at the end of the scheme (12th month).</div>
                    <div>&nbsp; &nbsp; ● All disputes will be resolved under the jurisdiction of Kozhikode District Court. Current tax and revenue policies are applicable.</div>
                </div>',
                'description_ml' => '<div>
                    <div>സ്വർണ്ണ പെയ്മെന്റ് പദ്ധതിയുടെ കാലാവധി 11 മാസം ആയിരിക്കും..</div>
                    <div>&nbsp; &nbsp; ● കാലാവധി പൂർത്തിയായ ശേഷം 12-ാം മാസം ഉപയോക്താക്കൾക്ക് മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമൻഡ്സ് ജുവല്ലറിയിൽ നിന്നും ഏത് സ്വർണാഭരണങ്ങൾ ആയാലും (കോൽക്കത്ത, ടർക്കിഷ്, ബോംബെ, കേരള, നാഗാസ് തുടങ്ങിയ ഡിസൈനുകൾ ഉൾപ്പെടെ) പണിക്കൂലി ഇല്ലാതെ വാങ്ങാവുന്നതാണ്.</div>
                    <div>&nbsp; &nbsp; ● അടവുകൾ ആദ്യത്തെ 6 മാസങ്ങൾ വരെ പരിധിയില്ലാതെ അടക്കാവുന്നതാണ് (മാസത്തിൽ ഒരു തവണ മാത്രം അടക്കുക). ഏഴാം മാസം മുതൽ തവണ സംഖ്യ, ആദ്യ 6 മാസങ്ങളിൽ അടച്ച തുകയുടെ മധ്യമാനം (median) അടിസ്ഥാനമാക്കി നിർണ്ണയിക്കും. ഉദാഹരണത്തിന്, മൊത്തം തുക ₹50,000 ആണെങ്കിൽ, 7-ാം മാസം മുതൽ പരമാവധി അടക്കാൻ കഴിയുന്ന തുക ₹8,333 ആയിരിക്കും. തുക ₹8,333 ഇൽ കുറയുന്നതിൽ പ്രശ്നമില്ല.</div>
                    <div>&nbsp; &nbsp; ● നിങ്ങൾ അടക്കുന്ന തുക അതാത് ദിവസത്തെ സ്വർണ്ണ വിലയുടെ നിരക്ക് പ്രകാരം സ്വർണ്ണത്തിലേക്ക് മാറ്റുന്നതാണ്.</div>
                    <div>&nbsp; &nbsp; ● പ്രതിമാസം 5-ാം തീയതി മുതൽ മുൻപ് അടവ് അടച്ചില്ലെങ്കിൽ, ഉപഭോക്താക്കൾക്ക് കുറിയിൽ തുടരുന്നതിനുള്ള യോഗ്യത നഷ്ടപ്പെടും. തവണ അടവിൽ വീഴ്ച്ച വരുത്തിയാൽ കുറിയുടെ മൊത്തം കാലാവധി കഴിഞ്ഞു അടച്ച തുക പണമായോ സ്വർണ്ണമായോ 11 മാസത്തെ ഓഫർ ഇല്ലാതെ വാങ്ങാവുന്നതാണ്.</div>
                    <div>&nbsp; &nbsp; ● സുരക്ഷയ്ക്കും സുതാര്യതക്കും വേണ്ടി അടവുകൾ നിർബന്ധമായും കുറി ആപ്പ് വഴി മാത്രം അടക്കേണ്ടതാണ്.</div>
                    <div>&nbsp; &nbsp; ● സ്കീം കാലാവധി അവസാനിക്കുന്ന ദിവസത്തെ സ്വർണ്ണ വിലയാണ് പരിഗണിക്കുക. ഉദാഹരണത്തിന് മാസം 1-ാം തീയതി ആണ് സ്കീം തുടങ്ങിയതെങ്കിൽ 12-ാം മാസം 1-ാം തീയതിയിലെ സ്വർണ്ണ വിലയായിരിക്കും പരിഗണിക്കുക.</div>
                    <div>&nbsp; &nbsp; ● ഈ പദ്ധതിയുടെ എല്ലാ തർക്കങ്ങളും കോഴിക്കോട് ജില്ലാ കോടതിയുടെ അധികാര പരിധിയിൽ ആയിരിക്കും. ഈ പദ്ധതി സർക്കാരിന്റെ കാലാകാലങ്ങളായുള്ള നയവ്യതിയാനങ്ങൾക്കും നിബന്ധനകൾക്കും വിധേയമായിരിക്കും.</div>
                </div>',
                'terms_and_coniditions_en' => '<div>
                    <div>These terms and conditions (&ldquo;Agreement&rdquo;) set forth the general terms and conditions of your use of the &ldquo;Madhurima Gold and Diamonds App&rdquo; mobile application (&ldquo;Mobile Application&rdquo; or &ldquo;Service&rdquo;) and any of its related products and services (collectively, &ldquo;Services&rdquo;). This Agreement is legally binding between you (&ldquo;User&rdquo;, &ldquo;you&rdquo; or &ldquo;your&rdquo;) and Madhurima Gold and Diamonds (with address 59/2 Railway Station Road, Mele Palayam, Kozhikode, PIN - 673001) (&ldquo;Madhurima Gold and Diamonds&rdquo;, &ldquo;we&rdquo;, &ldquo;us&rdquo; or &ldquo;our&rdquo;). If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such an entity to this Agreement, in which case the terms &ldquo;User&rdquo;, &ldquo;you&rdquo;, or &ldquo;your&rdquo; shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Mobile Application and Services. By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. You acknowledge that this Agreement is a contract between you and Madhurima Gold and Diamonds, even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services.</div>
                    <div>Table of contents</div>
                    <div>Accounts and membership</div>
                    <div>Links to other resources</div>
                    <div>Prohibited uses</div>
                    <div>Payments</div>
                    <div>Severability</div>
                    <div>Dispute resolution</div>
                    <div>Changes and amendments</div>
                    <div>Contacting us</div>
                    <br>
                    <div>Accounts and membership</div>
                    <div>You must be at least 18 years of age to use the Mobile Application and Services. By using the Mobile Application and Services and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account in the Mobile Application, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and start using the Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</div>
                    <div>Links to other resources</div>
                    <div>Although the Mobile Application and Services may link to other resources (such as websites, mobile applications, etc.), we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked resource, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of any businesses or individuals or the content of their resources. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any resource which you access through a link in the Mobile Application. Your linking to any other off-site resources is at your own risk.</div>
                    <div>Prohibited uses</div>
                    <div>In addition to other terms as set forth in the Agreement, you are prohibited from using the Mobile Application and Services or Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Mobile Application and Services, third party products and services, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Mobile Application and Services, third party products and services, or the Internet. We reserve the right to terminate your use of the Mobile Application and Services for violating any of the prohibited uses.</div>
                    <div>Payments</div>
                    <div>Payments to the app should be made only through Razor Pay; users can make the payment using debit cards, credit cards, UPI, or any other methods specified in the gateway. Our valuable users should make the payment on or before the 5th of every month. In the failure of such obligations, the subscribers of schemes would be compelled to follow whatever terms and conditions the respected schemes have to offer.</div>
                    <div>Severability</div>
                    <div>If any provision of these Terms and Conditions is found to be invalid or unenforceable, such provision shall be deemed severed from these Terms and Conditions and shall not affect the validity and enforceability of the remaining provisions.</div>
                    <div>Dispute resolution</div>
                    <div>The formation, interpretation, and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Kerala, India without regard to its rules on conflicts or choice of law and, to the extent applicable, the laws of India. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be the District Court located in Kozhikode, Kerala, India, and you hereby submit to the personal jurisdiction of the court. You hereby waive any right to a jury trial in any proceeding arising out of or related to this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.</div>
                    <div>Changes and amendments</div>
                    <div>We reserve the right to modify this Agreement or its terms related to the Mobile Application and Services at any time at our discretion. When we do, we will post a notification in the Mobile Application. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.</div>
                    <div>An updated version of this Agreement will be effective immediately upon the posting of the revised Agreement unless otherwise specified. Your continued use of the Mobile Application and Services after the effective date of the revised Agreement (or such other act specified at that time) will constitute your consent to those changes.</div>
                    <div>Contacting us</div>
                    <div>If you have any questions, concerns, or complaints regarding this Agreement, we encourage you to contact us using the details below:</div>
                    <div>madhurimagold@gmail.com</div>
                    <div>This document was last updated on December 12, 2024.</div>
                </div>',
                'terms_and_coniditions_ml' => '<div>
                    <div>സ്വർണ്ണ പെയ്മെന്റ് പദ്ധതി, നിബന്ധനകളും വ്യവസ്ഥകളും</div>
                    <div>ഈ നിബന്ധനകളും വ്യവസ്ഥകളും മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമണ്ട്സ് (വിലാസം 59/2 റെയിൽവേ സ്റ്റേഷൻ റോഡ്, മേലെ പാളയം, കോഴിക്കോട്, പിൻ - 673001) (&ldquo;ഇനിമുതൽ "മധുരിമ ഗോൾഡ് &amp; ഡയമണ്ട്സ്" അല്ലെങ്കിൽ "ഞങ്ങൾ" അല്ലെങ്കിൽ "ഞങ്ങളുടെ" എന്ന് വിളിക്കുന്നു) വികസിപ്പിച്ചതും നൽകുന്നതും ആയ "മധുരിമ ഗോൾഡ് ആൻഡ് ഡയമണ്ട്സ് ആപ്പ്" ("മൊബൈൽ ആപ്ലിക്കേഷൻ" അല്ലെങ്കിൽ "സേവനം") എന്നിവയുടെ ഉപയോഗത്തെയും അതിൻ്റെ ഏതെങ്കിലും അനുബന്ധ ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും (മൊത്തം, "സേവനങ്ങൾ") നിയന്ത്രിക്കുന്നതിന് വേണ്ടി യുള്ളതാണ്.</div>
                    <br>
                    <div>നിബന്ധനകളുടെ സ്വീകാര്യത</div>
                    <br>
                    <div>ആപ്പ് ആക്സസ് ചെയ്യുകയോ ഡൗൺലോഡ് ചെയ്യുകയോ ഇൻസ്റ്റാൾ ചെയ്യുകയോ ഉപയോഗിക്കുകയോ ചെയ്യുന്നതിലൂടെ, നിങ്ങൾ (ഇനിമുതൽ "ഉപയോക്താവ്" അല്ലെങ്കിൽ "നിങ്ങൾ" എന്ന് വിളിക്കപ്പെടുന്നു) ഈ ഉടമ്പടിയുടെ നിബന്ധനകൾ വായിക്കുകയും മനസ്സിലാക്കുകയും അംഗീകരിക്കുകയും ചെയ്യുന്നുവെന്നും നിങ്ങൾ അംഗീകരിക്കുന്നു. &nbsp;ഈ ഉടമ്പടി നിങ്ങൾ ഒപ്പിട്ടിട്ടില്ലെങ്കിലും ഇലക്ട്രോണിക് രീതിയിൽ നടപ്പിലാക്കിയാലും, നിങ്ങളും മധുരിമ ഗോൾഡ് &amp; ഡയമണ്ട്സും തമ്മിലുള്ള നിയമപരമായ കരാറാണ് ഈ കരാർ എന്ന് നിങ്ങൾ സമ്മതിക്കുന്നു. ഈ നിബന്ധനകളും വ്യവസ്ഥകളും നിങ്ങൾ അംഗീകരിക്കുന്നില്ലെങ്കിൽ, ആപ്പ് ഡൗൺലോഡ് ചെയ്യുകയോ ഇൻസ്റ്റാൾ ചെയ്യുകയോ ഉപയോഗിക്കുകയോ ചെയ്യരുത്.</div>
                    <br>
                    <div>ഉള്ളടക്ക പട്ടിക</div>
                    <div>അക്കൗണ്ടുകളും അംഗത്വവും</div>
                    <div>നിരോധിത ഉപയോഗങ്ങൾ</div>
                    <div>പേയ്മെൻ്റുകൾ</div>
                    <div>വേർപിരിയൽ</div>
                    <div>തർക്ക പരിഹാരം</div>
                    <div>മാറ്റങ്ങളും ഭേദഗതികളും</div>
                    <div>ഞങ്ങളെ ബന്ധപ്പെടുന്നതിന്</div>
                    <br>
                    <div>സ്ഥിരീകരിക്കുകയും സാക്ഷ്യപ്പെടുത്തുകയും ചെയ്യുന്നു</div>
                    <div>അക്കൗണ്ടുകളും അംഗത്വവും</div>
                    <div>മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ഉപയോഗിക്കുന്നതിന് നിങ്ങൾക്ക് കുറഞ്ഞത് 18 വയസ്സ് പ്രായമുണ്ടായിരിക്കണം. മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ഉപയോഗിക്കുന്നതിലൂടെയും ഈ ഉടമ്പടി അംഗീകരിക്കുന്നതിലൂടെയും നിങ്ങൾക്ക് കുറഞ്ഞത് 18 വയസ്സ് പ്രായമുണ്ടെന്ന് നിങ്ങൾ സ്ഥിരീകരിക്കുകയും സാക്ഷ്യപ്പെടുത്തുകയും ചെയ്യുന്നു. നിങ്ങൾ മൊബൈൽ ആപ്ലിക്കേഷനിൽ ഒരു അക്കൗണ്ട് സൃഷ്ടിക്കുകയാണെങ്കിൽ, നിങ്ങളുടെ അക്കൗണ്ടിൻ്റെ സുരക്ഷ നിലനിർത്തുന്നതിനുള്ള ഉത്തരവാദിത്തം നിങ്ങൾക്കാണ്, കൂടാതെ അക്കൗണ്ടിന് കീഴിൽ സംഭവിക്കുന്ന എല്ലാ പ്രവർത്തനങ്ങളുടെയും അതുമായി ബന്ധപ്പെട്ട് സ്വീകരിക്കുന്ന മറ്റേതെങ്കിലും പ്രവർത്തനങ്ങളുടെയും പൂർണ ഉത്തരവാദിത്തം നിങ്ങൾക്കായിരിക്കും. നിങ്ങൾ സൈൻ ഇൻ ചെയ്ത് സേവനങ്ങൾ ഉപയോഗിക്കാൻ തുടങ്ങുന്നതിന് മുമ്പ് ഞങ്ങൾ പുതിയ അക്കൗണ്ടുകൾ നിരീക്ഷിക്കുകയും അവലോകനം ചെയ്യുകയും ചെയ്തേക്കാം. ഏതെങ്കിലും തരത്തിലുള്ള തെറ്റായ കോൺടാക്റ്റ് വിവരങ്ങൾ നൽകുന്നത് നിങ്ങളുടെ അക്കൗണ്ട് അവസാനിപ്പിക്കുന്നതിലേക്ക് നയിച്ചേക്കാം. നിങ്ങളുടെ അക്കൗണ്ടിൻ്റെ ഏതെങ്കിലും അനധികൃത ഉപയോഗങ്ങളെക്കുറിച്ചോ മറ്റേതെങ്കിലും സുരക്ഷാ ലംഘനങ്ങളെക്കുറിച്ചോ നിങ്ങൾ ഉടൻ ഞങ്ങളെ അറിയിക്കണം. അത്തരം പ്രവൃത്തികളുടെയോ ഒഴിവാക്കലുകളുടെയോ ഫലമായി ഉണ്ടാകുന്ന ഏതെങ്കിലും തരത്തിലുള്ള നാശനഷ്ടങ്ങൾ ഉൾപ്പെടെ, നിങ്ങളുടെ ഏതെങ്കിലും പ്രവൃത്തികൾക്കോ ഒഴിവാക്കലുകൾക്കോ ഞങ്ങൾ ബാധ്യസ്ഥരായിരിക്കില്ല. ഈ ഉടമ്പടിയിലെ ഏതെങ്കിലും വ്യവസ്ഥ നിങ്ങൾ ലംഘിച്ചുവെന്നോ നിങ്ങളുടെ പെരുമാറ്റമോ ഉള്ളടക്കമോ ഞങ്ങളുടെ പ്രശസ്തിക്കും സൽസ്വഭാവത്തിനും ഹാനികരമാകുമെന്നോ ഞങ്ങൾ നിർണ്ണയിക്കുകയാണെങ്കിൽ, ഞങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ട് (അല്ലെങ്കിൽ അതിൻ്റെ ഏതെങ്കിലും ഭാഗം) താൽക്കാലികമായി നിർത്തുകയോ പ്രവർത്തനരഹിതമാക്കുകയോ ഇല്ലാതാക്കുകയോ ചെയ്യാം. മേൽപ്പറഞ്ഞ കാരണങ്ങളാൽ ഞങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ട് ഇല്ലാതാക്കുകയാണെങ്കിൽ, ഞങ്ങളുടെ സേവനങ്ങൾക്കായി നിങ്ങൾക്ക് വീണ്ടും രജിസ്റ്റർ ചെയ്യാനാകില്ല. കൂടുതൽ രജിസ്ട്രേഷൻ തടയാൻ നിങ്ങളുടെ ഇമെയിൽ വിലാസവും ഇൻ്റർനെറ്റ് പ്രോട്ടോക്കോൾ വിലാസവും ഞങ്ങൾ ബ്ലോക്ക് ചെയ്തേക്കാം.</div>
                    <br>
                    <div>നിരോധിത ഉപയോഗങ്ങൾ</div>
                    <div>കരാറിൽ പറഞ്ഞിരിക്കുന്ന മറ്റ് നിബന്ധനകൾക്ക് പുറമേ, മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും അല്ലെങ്കിൽ ഉള്ളടക്കവും താഴെ പറയുന്ന ആവശ്യങ്ങൾക്ക് ഉപയോഗിക്കുന്നതിൽ നിന്ന് നിങ്ങളെ നിരോധിച്ചിരിക്കുന്നു: (എ) ഏതെങ്കിലും നിയമവിരുദ്ധമായ ആവശ്യത്തിന്; (ബി) നിയമവിരുദ്ധമായ എന്തെങ്കിലും പ്രവൃത്തികൾ ചെയ്യാനോ അതിൽ പങ്കെടുക്കാനോ മറ്റുള്ളവരോട് അഭ്യർത്ഥിക്കുക; (സി) ഏതെങ്കിലും അന്താരാഷ്ട്ര, ഫെഡറൽ, പ്രവിശ്യ അല്ലെങ്കിൽ സംസ്ഥാന നിയന്ത്രണങ്ങൾ, നിയമങ്ങൾ, അല്ലെങ്കിൽ പ്രാദേശിക ഓർഡിനൻസുകൾ എന്നിവ ലംഘിക്കുന്നതിന്; (ഡി) നമ്മുടെ ബൗദ്ധിക സ്വത്തവകാശം അല്ലെങ്കിൽ മറ്റുള്ളവരുടെ ബൗദ്ധിക സ്വത്തവകാശം ലംഘിക്കുകയോ ചെയ്യുക; (ഇ) ലിംഗഭേദം, ലൈംഗിക ആഭിമുഖ്യം, മതം, വംശം, &nbsp;പ്രായം, ദേശീയ ഉത്ഭവം അല്ലെങ്കിൽ വൈകല്യം എന്നിവയുടെ അടിസ്ഥാനത്തിൽ ഉപദ്രവിക്കുക, ദുരുപയോഗം ചെയ്യുക, അപമാനിക്കുക, അപകീർത്തിപ്പെടുത്തുക, ഭീഷണിപ്പെടുത്തുക, അല്ലെങ്കിൽ വിവേചനം കാണിക്കുക; (എഫ്) തെറ്റായ അല്ലെങ്കിൽ തെറ്റിദ്ധരിപ്പിക്കുന്ന വിവരങ്ങൾ സമർപ്പിക്കാൻ; (ജി) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും, മൂന്നാം കക്ഷി ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും അല്ലെങ്കിൽ ഇൻറർനെറ്റിൻ്റെയും പ്രവർത്തനത്തെയോ ഏതെങ്കിലും തരത്തിൽ ഉപയോഗിക്കുന്നതോ ആയ വൈറസുകളോ മറ്റേതെങ്കിലും തരത്തിലുള്ള ക്ഷുദ്ര കോഡുകളോ അപ്ലോഡ് ചെയ്യുകയോ കൈമാറുകയോ ചെയ്യുക; (h) സ്പാം, ഫിഷ്, ഫാം, പ്രീ ടെക്സ്റ്റ്, സ്പൈഡർ, ക്രാൾ, അല്ലെങ്കിൽ സ്ക്രാപ്പ് എന്നിവ ചെയ്യുക; (i) ഏതെങ്കിലും അശ്ലീലമോ അധാർമികമോ ആയ ഉദ്ദേശ്യങ്ങൾക്കായി ഉപയോഗിക്കുക &nbsp;(j) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും, മൂന്നാം കക്ഷി ഉൽപ്പന്നങ്ങളുടെയും സേവനങ്ങളുടെയും അല്ലെങ്കിൽ ഇൻ്റർനെറ്റിൻ്റെ സുരക്ഷാ സവിശേഷതകളിൽ ഇടപെടുകയോ ഒഴിവാക്കുകയോ ചെയ്യുക. നിരോധിത ഉപയോഗങ്ങളിൽ ഏതെങ്കിലും ലംഘിച്ച കാരണത്താൽ മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും നിങ്ങളുടെ ഉപയോഗം അവസാനിപ്പിക്കാനുള്ള അവകാശം ഞങ്ങളിൽ നിക്ഷിപ്തമാണ്.</div>
                    <br>
                    <div>പേയ്മെന്റുകൾ</div>
                    <div>ആപ്പിലേക്കുള്ള പേയ്മെന്റുകൾ Razor Pay ഗേറ്റ്വേ വഴി മാത്രമേ നടത്താവൂ; ഉപയോക്താക്കൾക്ക് ഡെബിറ്റ് കാർഡുകൾ, ക്രെഡിറ്റ് കാർഡുകൾ, UPI അല്ലെങ്കിൽ ഗേറ്റ്വേയിൽ വ്യക്തമാക്കിയ മറ്റേതെങ്കിലും രീതികൾ ഉപയോഗിച്ച് പേയ്മെന്റ് &nbsp;നടത്താം. ഞങ്ങളുടെ വിലയേറിയ ഉപയോക്താക്കൾ എല്ലാ മാസവും 5-ാം തീയതിയോ അതിന് മുമ്പോ പേയ്മെൻ്റ് നടത്തണം. അത്തരം ബാധ്യതകൾ പരാജയപ്പെട്ടാൽ, ബഹുമാനപ്പെട്ട സ്കീമുകൾ വാഗ്ദാനം ചെയ്യുന്ന നിബന്ധനകളും വ്യവസ്ഥകളും പാലിക്കാൻ സ്കീമുകളുടെ വരിക്കാർ നിർബന്ധിതരാകും.</div>
                    <div>അവസാനിപ്പിക്കൽ</div>
                    <div>ഈ നിബന്ധനകളിലെയും വ്യവസ്ഥകളിലെയും ഏതെങ്കിലും വ്യവസ്ഥകൾ അസാധുവായതോ നടപ്പിലാക്കാൻ കഴിയാത്തതോ ആണെന്ന് കണ്ടെത്തിയാൽ, അത്തരം വ്യവസ്ഥകൾ ഈ നിബന്ധനകളിൽ നിന്നും വ്യവസ്ഥകളിൽ നിന്നും വേർപെടുത്തിയതായി കണക്കാക്കുകയും ശേഷിക്കുന്ന വ്യവസ്ഥകളുടെ സാധുതയെയും നിർവ്വഹണത്തെയും ബാധിക്കുകയുമില്ല.</div>
                    <br>
                    <div>തർക്ക പരിഹാരം</div>
                    <div>ഈ ഉടമ്പടി അതിൻ്റെ നിയമ തത്വങ്ങളുടെ വൈരുദ്ധ്യം പരിഗണിക്കാതെ, ഇന്ത്യയിലെ കേരള സംസ്ഥാനത്തിൻ്റെ നിയമങ്ങൾക്കനുസൃതമായി നിയന്ത്രിക്കപ്പെടുകയും വ്യാഖ്യാനിക്കുകയും ചെയ്യും. ഈ ഉടമ്പടി പ്രകാരം ഉണ്ടാകുന്ന തർക്കങ്ങൾക്കുള്ള അധികാരപരിധി ഇന്ത്യയിലെ കേരളത്തിലെ കോഴിക്കോട് ജില്ലാ കോടതിയിൽ മാത്രമായിരിക്കും. നിങ്ങൾ ഇതിനാൽ അത്തരം കോടതിയുടെ അധികാരപരിധി അംഗീകരിക്കുകയും ജൂറി വിചാരണയ്ക്കുള്ള ഏതെങ്കിലും അവകാശം ഒഴിവാക്കുകയും ചെയ്യുന്നു. ചരക്കുകളുടെ അന്താരാഷ്ട്ര വിൽപ്പനയ്ക്കുള്ള കരാറുകളെക്കുറിച്ചുള്ള ഐക്യരാഷ്ട്ര കൺവെൻഷൻ ബാധകമല്ല.</div>
                    <br>
                    <div>മാറ്റങ്ങളും ഭേദഗതികളും</div>
                    <div>ഞങ്ങളുടെ വിവേചനാധികാരത്തിൽ ഏത് സമയത്തും മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളുമായി ബന്ധപ്പെട്ട ഈ കരാറോ അതിൻ്റെ നിബന്ധനകളോ പരിഷ്കരിക്കാനുള്ള അവകാശം ഞങ്ങളിൽ നിക്ഷിപ്തമാണ്. ഞങ്ങൾ ഇത് ചെയ്യുമ്പോൾ, ഞങ്ങൾ മൊബൈൽ ആപ്ലിക്കേഷനിൽ ഒരു അറിയിപ്പ് പോസ്റ്റ് ചെയ്യും. നിങ്ങൾ നൽകിയ കോൺടാക്റ്റ് വിവരങ്ങൾ പോലെ, ഞങ്ങളുടെ വിവേചനാധികാരത്തിൽ മറ്റ് മാർഗങ്ങളിലൂടെയും ഞങ്ങൾ നിങ്ങൾക്ക് അറിയിപ്പ് നൽകിയേക്കാം.</div>
                    <div>ഈ ഉടമ്പടിയുടെ അപ്ഡേറ്റ് ചെയ്ത പതിപ്പ്, വ്യക്തമാക്കിയിട്ടില്ലെങ്കിൽ, പുതുക്കിയ ഉടമ്പടി പോസ്റ്റുചെയ്യുമ്പോൾ ഉടനടി പ്രാബല്യത്തിൽ വരും. പുതുക്കിയ ഉടമ്പടി പ്രാബല്യത്തിൽ വരുന്ന തീയതിക്ക് ശേഷം (അല്ലെങ്കിൽ ആ സമയത്ത് വ്യക്തമാക്കിയ മറ്റ് ആക്റ്റ്) മൊബൈൽ ആപ്ലിക്കേഷൻ്റെയും സേവനങ്ങളുടെയും നിങ്ങളുടെ തുടർച്ചയായ ഉപയോഗം ആ മാറ്റങ്ങൾക്ക് നിങ്ങളുടെ സമ്മതം നൽകിയതായി പരിഗണിക്കും.</div>
                    <br>
                    <div>ഈ നിബന്ധനകളുടെ സ്വീകാര്യത</div>
                    <div>നിങ്ങൾ ഈ ഉടമ്പടി വായിച്ചതായി സമ്മതിക്കുകയും അതിൻ്റെ എല്ലാ നിബന്ധനകളും വ്യവസ്ഥകളും അംഗീകരിക്കുകയും ചെയ്യുന്നു. മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ആക്സസ് ചെയ്യുന്നതിലൂടെയും ഉപയോഗിക്കുന്നതിലൂടെയും നിങ്ങൾ ഈ ഉടമ്പടിക്ക് വിധേയരാണെന്ന് സമ്മതിക്കുന്നു. ഈ കരാറിൻ്റെ നിബന്ധനകൾ പാലിക്കാൻ നിങ്ങൾ സമ്മതിക്കുന്നില്ലെങ്കിൽ, മൊബൈൽ ആപ്ലിക്കേഷനും സേവനങ്ങളും ആക്സസ് ചെയ്യാനോ ഉപയോഗിക്കാനോ നിങ്ങൾക്ക് അധികാരമില്ല.</div>
                    <br>
                    <div>ഞങ്ങളെ ബന്ധപ്പെടുന്നതിന്</div>
                    <div>ഈ കരാറുമായി ബന്ധപ്പെട്ട് നിങ്ങൾക്ക് എന്തെങ്കിലും ചോദ്യങ്ങളോ ആശങ്കകളോ പരാതികളോ ഉണ്ടെങ്കിൽ, ചുവടെയുള്ള വിശദാംശങ്ങൾ ഉപയോഗിച്ച് ഞങ്ങളെ ബന്ധപ്പെ ടാവുന്നതാണ്. madhurimagold@gmail.com</div>
                    <div>ഈ ഡോക്യുമെൻ്റ് അവസാനം അപ്ഡേറ്റ് ചെയ്തത് 2024 ഡിസംബർ 12 നാണ്.</div>
                </div>',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('schemes')->insert($schemes);
    }
}
