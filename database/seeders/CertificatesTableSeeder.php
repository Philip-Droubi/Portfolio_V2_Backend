<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('certificates')->delete();
        
        \DB::table('certificates')->insert(array (
            0 => 
            array (
                'id' => 3,
                'source' => 'google',
                'title' => '{"en":"Google digital marketing basics","ar":"أساسيات التسويق الرقمي من Google"}',
                'description' => '{"en":"A Google-issued certification in Digital Marketing Basics awarded upon completing the course and successfully passing the exam.","ar":"شهادة صادرة عن Google في أساسيات التسويق الرقمي، تُمنح بعد إكمال الدورة التدريبية واجتياز الاختبار بنجاح."}',
                'issue_date' => '2019-08-29',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783795728/portfolio/v2/certificates/3/lt9xeta9nhnhdm3gkanz.png',
                'file_public_id' => 'portfolio/v2/certificates/3/lt9xeta9nhnhdm3gkanz',
                'created_at' => '2026-07-11 21:48:36',
                'updated_at' => '2026-07-11 21:48:50',
            ),
            1 => 
            array (
                'id' => 4,
                'source' => 'udacity',
                'title' => '{"en":"Udacity Full Stack Development Track","ar":"مسار تطوير الواجهات الخلفية والواجهات الأمامية من Udacity"}',
            'description' => '{"en":"A Udacity-issued certification in Full Stack Development, awarded upon completing the course and successfully passing the exam. The program covered Python and modern front-end technologies, and I participated through the One Million Arab Coders initiative.","ar":"شهادة صادرة عن Udacity في تطوير الأنظمة الكاملة (Full Stack Development)، تُمنح بعد إكمال الدورة التدريبية واجتياز الاختبار بنجاح. شملت الدورة لغة Python ولغات وتقنيات الواجهة الأمامية الحديثة، وقد شاركت فيها عبر مبادرة مليون مبرمج عربي."}',
                'issue_date' => '2021-06-01',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783801062/portfolio/v2/certificates/4/rhsajgc4dai8eijirz66.png',
                'file_public_id' => 'portfolio/v2/certificates/4/rhsajgc4dai8eijirz66',
                'created_at' => '2026-07-11 23:17:36',
                'updated_at' => '2026-07-11 23:17:44',
            ),
            2 => 
            array (
                'id' => 5,
                'source' => 'udacity',
                'title' => '{"en":"Udacity Full Stack Development Track Participation","ar":"المشاركة في مسار تطوير الأنظمة الكاملة من Udacity"}',
            'description' => '{"en":"A Udacity participation certification in Full Stack Development, awarded for completing the course requirements and successfully passing the mid-program exam. The track covered Python and modern front-end technologies, and I took part in it through the One Million Arab Coders initiative.","ar":"شهادة مشاركة من Udacity في تطوير الأنظمة الكاملة (Full Stack Development)، مُنحت بعد إكمال متطلبات الدورة واجتياز الاختبار المتوسط بنجاح. شمل المسار لغة Python وتقنيات الواجهة الأمامية الحديثة، وقد شاركت فيه عبر مبادرة مليون مبرمج عربي."}',
                'issue_date' => '2021-03-01',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783801181/portfolio/v2/certificates/5/csklke8ecofmyeki6cjt.png',
                'file_public_id' => 'portfolio/v2/certificates/5/csklke8ecofmyeki6cjt',
                'created_at' => '2026-07-11 23:19:38',
                'updated_at' => '2026-07-11 23:19:43',
            ),
            3 => 
            array (
                'id' => 6,
                'source' => 'coursera',
                'title' => '{"en":"Coursera | Meta Introduction to Databases","ar":"كورسيرا | مقدمة في قواعد البيانات من Meta"}',
                'description' => '{"en":"A certificate from Coursera for completing the Introduction to Databases course provided by Meta. This online, non‑credit course—authorized by Meta and delivered through Coursera—covered foundational database concepts, data models, and essential query techniques.","ar":"شهادة من Coursera لإكمال دورة مقدمة في قواعد البيانات المقدمة من Meta. وهي دورة تدريبية عبر الإنترنت بدون ساعات اعتماد، مُعتمدة من Meta ومقدمة عبر منصة Coursera، وتغطي المفاهيم الأساسية لقواعد البيانات ونماذج البيانات وتقنيات الاستعلام الأساسية."}',
                'issue_date' => '2022-09-29',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783801316/portfolio/v2/certificates/6/iznhbg38tcmjnhe4uexq.png',
                'file_public_id' => 'portfolio/v2/certificates/6/iznhbg38tcmjnhe4uexq',
                'created_at' => '2026-07-11 23:21:44',
                'updated_at' => '2026-07-11 23:21:58',
            ),
            4 => 
            array (
                'id' => 7,
                'source' => 'coursera',
                'title' => '{"en":"Coursera | Meta Introduction to Version Control","ar":"كورسيرا | مقدمة في نظام التحكم بالإصدارات من Meta"}',
                'description' => '{"en":"A certificate from Coursera for completing the Version Control course provided by Meta. This online, non‑credit course—authorized by Meta and delivered through Coursera—covered essential version control concepts, Git fundamentals, branching workflows, and collaborative development practices.","ar":"شهادة من Coursera لإكمال دورة مقدمة في نظام التحكم بالإصدارات المقدمة من Meta. وهي دورة تدريبية عبر الإنترنت بدون ساعات اعتماد، مُعتمدة من Meta ومقدمة عبر منصة Coursera، وتغطي المفاهيم الأساسية للتحكم بالإصدارات، وأساسيات Git، وآليات إنشاء الفروع، وممارسات التعاون في تطوير البرمجيات."}',
                'issue_date' => '2023-10-27',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783801479/portfolio/v2/certificates/7/pdvhjflbyu1iskwdirga.png',
                'file_public_id' => 'portfolio/v2/certificates/7/pdvhjflbyu1iskwdirga',
                'created_at' => '2026-07-11 23:24:26',
                'updated_at' => '2026-07-11 23:24:41',
            ),
            5 => 
            array (
                'id' => 8,
                'source' => 'coursera',
                'title' => '{"en":"Coursera | Meta Databases Structures and Management with MySQL","ar":"كورسيرا | هياكل قواعد البيانات وإدارتها باستخدام MySQL من Meta"}',
                'description' => '{"en":"A certificate from Coursera for completing the Databases Structures and Management with MySQL course provided by Meta. This online, non‑credit course—authorized by Meta and delivered through Coursera—covered relational database design, data modeling, MySQL fundamentals, and practical techniques for managing and querying structured data.","ar":"شهادة من Coursera لإكمال دورة هياكل قواعد البيانات وإدارتها باستخدام MySQL المقدمة من Meta. وهي دورة تدريبية عبر الإنترنت بدون ساعات اعتماد، مُعتمدة من Meta ومقدمة عبر منصة Coursera، وتغطي تصميم قواعد البيانات العلائقية، ونمذجة البيانات، وأساسيات MySQL، وتقنيات عملية لإدارة البيانات والاستعلام عنها."}',
                'issue_date' => '2023-10-29',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783801592/portfolio/v2/certificates/8/g5rq2e6srces5p2s4dxn.png',
                'file_public_id' => 'portfolio/v2/certificates/8/g5rq2e6srces5p2s4dxn',
                'created_at' => '2026-07-11 23:26:21',
                'updated_at' => '2026-07-11 23:26:35',
            ),
            6 => 
            array (
                'id' => 9,
                'source' => 'coursera',
                'title' => '{"en":"Coursera | Meta Programming in Python","ar":"كورسيرا | البرمجة بلغة Python من Meta"}',
                'description' => '{"en":"A certificate from Coursera for completing the Programming in Python course provided by Meta. This online, non‑credit course—authorized by Meta and delivered through Coursera—covered Python fundamentals, data types, control flow, functions, modules, and practical programming techniques used in modern software development.","ar":"شهادة من Coursera لإكمال دورة البرمجة بلغة Python المقدمة من Meta. وهي دورة تدريبية عبر الإنترنت بدون ساعات اعتماد، مُعتمدة من Meta ومقدمة عبر منصة Coursera، وتغطي أساسيات لغة Python، وأنواع البيانات، وتدفق التحكم، والدوال، والوحدات البرمجية، وتقنيات البرمجة العملية المستخدمة في تطوير البرمجيات الحديثة."}',
                'issue_date' => '2023-11-12',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783801704/portfolio/v2/certificates/9/w5y0d5tgfg6ucmrzbxue.png',
                'file_public_id' => 'portfolio/v2/certificates/9/w5y0d5tgfg6ucmrzbxue',
                'created_at' => '2026-07-11 23:28:13',
                'updated_at' => '2026-07-11 23:28:27',
            ),
            7 => 
            array (
                'id' => 10,
                'source' => 'academic & Volunteer',
                'title' => '{"en":"Blind Care Association – Volunteer Certificate","ar":"جمعية رعاية المكفوفين – شهادة تطوّع"}',
                'description' => '{"en":"A volunteer certificate from the Blind Care Association in Damascus, awarded in recognition of my work as a volunteer software engineer and my contribution to developing a complete software system that enhances the association’s management processes and improves communication with its beneficiaries.","ar":"شهادة تطوّع من جمعية رعاية المكفوفين في دمشق، تقديرًا لعملي كمتطوّع في مجال هندسة البرمجيات ومساهمتي في تطوير نظام برمجي متكامل يُسهّل عمليات الإدارة داخل الجمعية ويُحسّن التواصل مع المستفيدين."}',
                'issue_date' => '2024-01-31',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783801836/portfolio/v2/certificates/10/kcp8ucuiub7mln6zgmlk.png',
                'file_public_id' => 'portfolio/v2/certificates/10/kcp8ucuiub7mln6zgmlk',
                'created_at' => '2026-07-11 23:30:22',
                'updated_at' => '2026-07-11 23:30:38',
            ),
            8 => 
            array (
                'id' => 11,
                'source' => 'academic & Volunteer',
                'title' => '{"en":"Blind Care Association – Recommendation Letter","ar":"جمعية رعاية المكفوفين – رسالة توصية"}',
                'description' => '{"en":"A recommendation letter from Mr. Shafiq Hamassna, the Chairman of the Board of Directors of the Blind Care Association in Damascus, recognizing my contributions and performance during my volunteer work as a software engineer.","ar":"رسالة توصية من السيد شفيق حماصنة، رئيس مجلس إدارة جمعية رعاية المكفوفين في دمشق، تقديرًا لمساهمتي وأدائي خلال فترة عملي التطوعي كمهندس برمجيات في الجمعية."}',
                'issue_date' => '2024-01-31',
                'file_url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783802072/portfolio/v2/certificates/11/wjrnt4hbrt0h19nojyhu.jpg',
                'file_public_id' => 'portfolio/v2/certificates/11/wjrnt4hbrt0h19nojyhu',
                'created_at' => '2026-07-11 23:34:05',
                'updated_at' => '2026-07-11 23:34:34',
            ),
        ));
        
        
    }
}