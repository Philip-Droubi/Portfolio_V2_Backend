<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{"en":"Ant War","ar":"حرب النمل"}',
                'slug' => 'ant-war',
                'tiny_description' => '{"en":"AntsWar Game is a university OpenGL project about a swarm of ants invading your PC. Your mission is to grab your weapon and fight off these chaotic, rowdy ants before they take over your system.","ar":"لعبة AntsWar هي مشروع جامعي باستخدام OpenGL، وتدور حول غزو مجموعة من النمل لجهاز الكمبيوتر الخاص بك. مهمتك هي حمل سلاحك ومحاربة هذا النمل المشاغب قبل أن يسيطر على جهازك."}',
            'description' => '{"en":"<p>This project was completed during the third year of university in the Computer Graphics course.<br>It was developed in C++ using the OpenGL legacy library.</p><br><h2>The project was created by:</h2><ul><li><p>Kawther Khadam AlJammeh</p></li><li><p>Philip Droubi</p></li><li><p>Mohammed Ala&#039;a Al‑Olabi</p></li></ul>","ar":"<p>تم إنجاز هذا المشروع خلال السنة الجامعية الثالثة ضمن مادة الرسوميات الحاسوبية (Computer Graphics).<br>وقد تم تطويره باستخدام لغة ++C ومكتبة OpenGL القديمة.</p><br><h2>تم تنفيذ المشروع بواسطة:</h2><ul><li><p>كوثر خضام الجامع</p></li><li><p>فيليب دروبي</p></li><li><p>محمد علاء العلبي</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782178313/portfolio/v2/projects/1/sbytzs54x5ziprqf0icd.jpg',
                'main_image_public_id' => 'portfolio/v2/projects/1/sbytzs54x5ziprqf0icd',
                'start_date' => '2022-11-01',
                'end_date' => '2023-01-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-06-23 04:31:49',
                'updated_at' => '2026-06-23 04:36:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '{"en":"Portfolio V1","ar":"Portfolio V1"}',
                'slug' => 'portfolio-v1',
                'tiny_description' => '{"en":"My first portfolio, built while learning HTML/CSS/JS — a simple starting point before evolving further.","ar":"أول موقع بورتفوليو لي، بنيته أثناء تعلمي HTML وCSS وJavaScript — كان نقطة البداية البسيطة قبل أن أتطور أكثر."}',
                'description' => '{"en":"<h1>Portfolio V1</h1><br><p>This was my first attempt at creating a personal portfolio while learning the basics of HTML, CSS, and JavaScript.<br>It represents the early stage of my web development journey and the foundation that later evolved into more advanced work.</p><br><p>A simple and experimental design focused on practicing structure, layout, and basic interactivity before moving on to more polished projects.</p>","ar":"<h1>البورتفوليو الإصدار الأول</h1><br><p>كان هذا أول محاولة لي لإنشاء موقع بورتفوليو أثناء تعلمي أساسيات HTML وCSS وJavaScript.<br>يمثل المرحلة الأولى من رحلتي في تطوير الويب، والأساس الذي تطورت منه أعمالي اللاحقة.</p><br><p>تصميم بسيط وتجريبي ركّز على التدريب على البنية والتخطيط والتفاعلات الأساسية قبل الانتقال إلى مشاريع أكثر احترافية.</p>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782766353/portfolio/v2/projects/2/tqlra9mrudd3uo9dco3l.png',
                'main_image_public_id' => 'portfolio/v2/projects/2/tqlra9mrudd3uo9dco3l',
                'start_date' => '2023-03-01',
                'end_date' => '2023-07-01',
                'is_draft' => 0,
                'url' => 'https://github.com/Philip-Droubi/Portfolio_V1',
                'live_url' => 'https://philip-droubi.github.io/Portfolio_V1/',
                'is_company' => 0,
                'created_at' => '2026-06-24 21:45:03',
                'updated_at' => '2026-07-01 22:38:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '{"en":"Red Swap Blue","ar":"Red Swap Blue"}',
                'slug' => 'red-swap-blue',
                'tiny_description' => '{"en":"A web game project showcasing BFS, DFS, Uniform Cost Search, and A* algorithms, combined with interactive user gameplay.","ar":"مشروع لعبة ويب يستعرض خوارزميات BFS وDFS وUniform Cost Search وA*، مع دمج تجربة لعب تفاعلية للمستخدم."}',
                'description' => '{"en":"<p>A web game project developed as part of a university course.<br>It implements classic search algorithms — BFS, DFS, Uniform Cost Search, and A* — while also allowing interactive user gameplay.</p><br><p>This project reflects both academic learning and creative application in a fun environment.</p>","ar":"<p>مشروع لعبة ويب تم تطويره ضمن مقرر جامعي.<br>يطبق خوارزميات البحث الكلاسيكية — BFS وDFS وUniform Cost Search وA* — مع إتاحة تجربة لعب تفاعلية للمستخدم.</p><br><p>يعكس هذا المشروع مزيجًا بين التعلم الأكاديمي والتطبيق العملي.</p>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782359226/portfolio/v2/projects/3/gkc9fe4qlu1a1szbkmdw.png',
                'main_image_public_id' => 'portfolio/v2/projects/3/gkc9fe4qlu1a1szbkmdw',
                'start_date' => '2022-11-01',
                'end_date' => '2022-12-01',
                'is_draft' => 0,
                'url' => 'https://github.com/Philip-Droubi/Red_Swap_Blue',
                'live_url' => 'https://philip-droubi.github.io/Red_Swap_Blue/',
                'is_company' => 0,
                'created_at' => '2026-06-25 06:46:55',
                'updated_at' => '2026-06-25 20:53:40',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '{"en":"Frontend Mentor","ar":"Frontend Mentor"}',
                'slug' => 'frontend-mentor',
                'tiny_description' => '{"en":"My Frontend Mentor profile showcasing 30+ completed challenges, reflecting steady growth in HTML, CSS, JavaScript, and modern frontend development.","ar":"ملفي الشخصي على Frontend Mentor يضم أكثر من 30 تحديًا منجزًا، مما يعكس تطورًا مستمرًا في مهارات HTML وCSS وJavaScript وتقنيات الواجهة الأمامية الحديثة."}',
                'description' => '{"en":"<h1 style=\\"text-align: center;\\">Frontend Mentor Profile</h1><br><p>My Frontend Mentor profile showcases my hands‑on journey in frontend development, where I have completed over <strong>30 real‑world challenges</strong> covering layouts, components, responsive design, and interactive UI behavior.<br>These challenges helped me strengthen my skills in <strong>HTML, CSS, JavaScript, accessibility, and clean UI implementation</strong>.</p><br><h2>What This Profile Represents</h2><p>A continuous learning path focused on writing clean, maintainable code and improving problem‑solving through practical, real‑world tasks.<br>Each challenge contributed to refining my workflow, sharpening my attention to detail, and elevating my frontend capabilities.</p><br><p>You can explore all my completed challenges, solutions, and code implementations directly on my Frontend Mentor profile.</p>","ar":"<h1 style=\\"text-align: center;\\">ملف Frontend Mentor</h1><br><p>يعرض ملفي على Frontend Mentor رحلتي العملية في تطوير الواجهات الأمامية، حيث أنجزت أكثر من <strong>30 تحديًا حقيقيًا</strong> تشمل تصميم الصفحات، وبناء المكوّنات، والتصميم المتجاوب، والسلوك التفاعلي للواجهة.<br>ساهمت هذه التحديات في تعزيز مهاراتي في <strong>HTML وCSS وJavaScript وإتاحة الوصول وتنفيذ واجهات نظيفة واحترافية</strong>.</p><br><h2>ماذا يمثل هذا الملف؟</h2><p>يمثل مسار تعلم مستمر يركز على كتابة كود نظيف وقابل للصيانة، وتحسين مهارات حل المشكلات من خلال مهام عملية واقعية.<br>كل تحدٍ ساعدني على تحسين سير العمل، وزيادة الدقة في التفاصيل، ورفع مستوى قدراتي في تطوير الواجهات الأمامية.</p><br><p>يمكنك استكشاف جميع التحديات التي أنجزتها، والحلول، وطريقة التنفيذ البرمجية من خلال ملفي على Frontend Mentor.</p>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782765294/portfolio/v2/projects/4/vznzqnxpsrzinxujlfb6.png',
                'main_image_public_id' => 'portfolio/v2/projects/4/vznzqnxpsrzinxujlfb6',
                'start_date' => '2021-06-01',
                'end_date' => '2024-12-01',
                'is_draft' => 0,
                'url' => 'https://www.frontendmentor.io/profile/Philip-Droubi',
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-06-25 20:44:53',
                'updated_at' => '2026-06-29 23:34:59',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => '{"en":"Vigor App","ar":"Vigor App"}',
                'slug' => 'vigor-app',
                'tiny_description' => '{"en":"Vigor is a university fitness platform project that combines home workouts, nutrition guidance, and a social network for trainers and trainees — offering a complete fitness experience in one place.","ar":"Vigor هو مشروع جامعي لمنصّة لياقة تجمع بين التمارين المنزلية، والإرشاد الغذائي، وشبكة اجتماعية للمدربين والمتدربين — لتقديم تجربة لياقة متكاملة في مكان واحد."}',
            'description' => '{"en":"<h1 style=\\"text-align: center;\\">Vigor Fitness Platform</h1><br><p>Vigor is a university project built to learn how to design and develop a complete, full‑featured platform. It combines home workouts, nutrition systems, and a social media experience for trainers, dietitians, and trainees — creating an all‑in‑one fitness ecosystem.</p><br><h2>1. What is Vigor?</h2><p>Vigor is a home workout and fitness application designed to help users exercise, follow diet plans, and stay healthy without needing to visit gyms or health centers. It also includes a built‑in social network that connects trainees with coaches and dietitians, making the experience more engaging and interactive.</p><br><h2>2. Key Features</h2><h3>• User System</h3><ul><li><p>Multiple roles: <strong>Admin, Managers, Coaches, Dietitians, Trainees</strong>.</p></li><li><p>Account creation via email or Google.</p></li><li><p>Advanced account management and profile customization.</p></li><li><p>OTP and email verification for high security.</p></li><li><p>Account deletion with 30‑day recovery.</p></li><li><p>Integrated notification &amp; email system.</p></li><li><p>Apply to become a coach or dietitian by submitting a CV.</p></li><li><p>Search across workouts, diets, challenges, users, and more.</p></li></ul><br><h3>• Workouts &amp; Diets System</h3><ul><li><p>Coaches can create and update structured workouts and challenges.</p></li><li><p>Dietitians can create and update detailed diet plans.</p></li><li><p>Trainees can subscribe, rate, and report workouts, challenges, and diets.</p></li><li><p>Uses device sensors for activity‑based challenges (walking, running, push‑ups).</p></li></ul><br><h3>• Social Network System</h3><ul><li><p>Coaches, Dietitians, and Admins can publish three types of posts: Multimedia posts, Multiple‑choice polls, Tips polls.</p></li><li><p>Follow or block other users.</p></li><li><p>Trainees can react, comment, save, or report posts.</p></li><li><p>Real‑time chat system included.</p></li></ul><br><h3>• Dashboards &amp; Control Panel</h3><ul><li><p>Full admin dashboard for managing the entire platform.</p></li><li><p>Ability to shut down the app or disable specific features.</p></li><li><p>Review reports, ban users, approve CVs, and more.</p></li><li><p>Periodic detailed analytics and system reports.</p></li></ul><br><p>Vigor represents a major learning milestone — a complete platform built from scratch, combining backend logic, user experience, and real‑world system design.</p>","ar":"<h1 style=\\"text-align: center;\\">منصّة Vigor للّياقة</h1><br><p>Vigor هو مشروع جامعي تم تطويره بهدف تعلّم كيفية تصميم وبناء منصّة متكاملة. يجمع بين التمارين المنزلية، والأنظمة الغذائية، وتجربة شبكة اجتماعية تربط المدربين وأخصائيي التغذية والمتدربين — ليقدّم نظام لياقة شامل في مكان واحد.</p><br><h2>1. ما هو Vigor؟</h2><p>Vigor هو تطبيق للتمارين المنزلية يساعد المستخدمين على ممارسة الرياضة، متابعة الأنظمة الغذائية، والحفاظ على صحتهم دون الحاجة للذهاب إلى النوادي أو المراكز الصحية. كما يحتوي على شبكة اجتماعية مدمجة تربط المتدربين بالمدربين وأخصائيي التغذية، مما يجعل التجربة أكثر تفاعلًا ومتعة.</p><br><h2>2. الميزات الرئيسية</h2><h3>• نظام المستخدمين</h3><ul><li><p>أدوار متعددة: <strong>مدير عام، مديرون، مدربون، أخصائيو تغذية، متدربون</strong>.</p></li><li><p>إنشاء حساب عبر البريد الإلكتروني أو Google.</p></li><li><p>ميزات متقدمة للتحكم بالحساب وتخصيص الملف الشخصي.</p></li><li><p>مستوى أمان عالٍ عبر رمز OTP وتفعيل البريد الإلكتروني.</p></li><li><p>إمكانية حذف الحساب واستعادته خلال 30 يومًا.</p></li><li><p>نظام إشعارات وبريد إلكتروني مدمج.</p></li><li><p>إمكانية التقدّم ليصبح المستخدم مدربًا أو أخصائي تغذية عبر إرسال السيرة الذاتية.</p></li><li><p>البحث عن التمارين، التحديات، الأنظمة الغذائية، المستخدمين والمزيد.</p></li></ul><br><h3>• نظام التمارين والأنظمة الغذائية</h3><ul><li><p>يمكن للمدربين إنشاء وتحديث التمارين والتحديات المنظمة.</p></li><li><p>يمكن لأخصائيي التغذية إنشاء وتحديث الأنظمة الغذائية التفصيلية.</p></li><li><p>يمكن للمتدربين الاشتراك، التقييم، أو الإبلاغ عن التمارين والتحديات والأنظمة الغذائية.</p></li><li><p>يدعم تحديات تعتمد على حساسات الجهاز مثل المشي والجري وتمارين الضغط.</p></li></ul><br><h3>• الشبكة الاجتماعية</h3><ul><li><p>يمكن للمدربين وأخصائيي التغذية والمديرين نشر ثلاثة أنواع من المنشورات: منشورات متعددة الوسائط، استطلاعات متعددة الخيارات، منشورات نصائح.</p></li><li><p>متابعة المستخدمين أو حظرهم.</p></li><li><p>يمكن للمتدربين التفاعل مع المنشورات، التعليق، الحفظ، أو الإبلاغ.</p></li><li><p>نظام محادثة فورية مدمج.</p></li></ul><br><h3>• لوحة التحكم وإدارة التطبيق</h3><ul><li><p>لوحة تحكم كاملة لإدارة المنصّة.</p></li><li><p>إمكانية إيقاف التطبيق أو تعطيل ميزات معينة.</p></li><li><p>مراجعة البلاغات، حظر المستخدمين، قبول أو رفض طلبات السيرة الذاتية، والمزيد.</p></li><li><p>تقارير تحليلية دورية حول أداء التطبيق.</p></li></ul><br><p>يمثل Vigor خطوة تعليمية كبيرة — منصّة متكاملة بُنيت من الصفر، تجمع بين المنطق البرمجي وتجربة المستخدم وتصميم الأنظمة الواقعية.</p>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411227/portfolio/v2/projects/6/jyfjlucar2rvhatoinjn.jpg',
                'main_image_public_id' => 'portfolio/v2/projects/6/jyfjlucar2rvhatoinjn',
                'start_date' => '2022-05-01',
                'end_date' => '2022-08-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-06-25 21:13:44',
                'updated_at' => '2026-06-25 22:42:53',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => '{"en":"Kafo - Freelancing Platform","ar":"منصة كفو للعمل الحر"}',
                'slug' => 'kafo-freelancing-platform',
                'tiny_description' => '{"en":"A graduation project built with Peak Link IT Company — a freelancing platform where I handled system analysis, backend development with Laravel, and the React.js user website.","ar":"مشروع تخرّج بالتعاون مع شركة Peak Link IT، وهو منصّة للعمل الحر عملت فيها على تحليل النظام وتطوير الخلفية باستخدام Laravel، إضافةً إلى تطوير واجهة المستخدم بـ React.js."}',
                'description' => '{
  "en": "<h1 style=\\"text-align:center\\">Kafo Freelancing Platform</h1><br><p>Kafo is my 2024 graduation project, developed in collaboration with Peak Link IT Company.  It is a Syrian freelancing platform designed to improve communication and collaboration between freelancers and project owners, providing a structured and reliable environment for managing freelance work.</p><br><h2>1. My Role in the Project</h2><p>I was responsible for the system analysis and architectural design of the platform, ensuring a clear and scalable structure for all core features.  On the technical side, I developed the backend using the <strong>Laravel</strong> framework, implementing authentication, project workflows, user roles, and platform logic.  Additionally, I contributed to building the user-facing website using <strong>React.js</strong>, focusing on creating a clean, user-friendly interface.</p><br><h2>2. Project Overview</h2><p>Kafo aims to connect freelancers with clients in a smooth and organized way.  The platform supports project posting, bidding, communication, and progress tracking — all designed to make freelance collaboration more efficient and transparent.</p><br><h2>3. Collaboration With Peak Link IT Company</h2><p>This project was developed as part of an internship with Peak Link IT Company, giving me valuable real-world experience in professional software development.  Working with industry mentors helped refine my technical skills, improve my workflow, and understand how production-level systems are built and delivered.</p><br><p>Kafo represents a major milestone in my academic and professional journey — combining system analysis, backend engineering, and frontend development into a complete, real-world platform.</p>",
"ar": "<h1 style=\\"text-align:center\\">منصّة كفو للعمل الحر</h1><br><p>كفو هو مشروع تخرّج لعام 2024 تم تطويره بالتعاون مع شركة Peak Link IT.  يهدف المشروع إلى إنشاء منصّة سورية للعمل الحر تساعد على تحسين التواصل والتعاون بين المستقلين وأصحاب المشاريع، وتوفير بيئة منظّمة لإدارة العمل الحر.</p><br><h2>1. دوري في المشروع</h2><p>كنت مسؤولًا عن تحليل النظام وتصميم هيكلية المنصّة لضمان بناء نظام واضح وقابل للتوسّع.  وعلى الجانب التقني، قمت بتطوير الخلفية باستخدام إطار <strong>Laravel</strong>، بما يشمل نظام المستخدمين، تسجيل الدخول، إدارة المشاريع، والأدوار والصلاحيات.  كما شاركت في تطوير واجهة المستخدم باستخدام <strong>React.js</strong>، مع التركيز على تصميم واجهة سهلة الاستخدام وسلسة.</p><br><h2>2. نظرة عامة على المشروع</h2><p>تهدف منصّة كفو إلى ربط المستقلين بأصحاب المشاريع بطريقة سلسة ومنظّمة.  تدعم المنصّة نشر المشاريع، تقديم العروض، التواصل، ومتابعة سير العمل — مما يجعل عملية التعاون أكثر وضوحًا وكفاءة.</p><br><h2>3. التعاون مع شركة Peak Link IT</h2><p>تم تنفيذ المشروع ضمن تدريب عملي مع شركة Peak Link IT، مما منحني خبرة حقيقية في بيئة تطوير برمجيات احترافية.  ساعدني العمل مع فريق متخصص على تطوير مهاراتي التقنية وتحسين أسلوب عملي وفهم كيفية بناء أنظمة جاهزة للإنتاج.</p><br><p>يمثّل مشروع كفو خطوة مهمة في مسيرتي الأكاديمية والمهنية — حيث يجمع بين تحليل الأنظمة، تطوير الخلفية، وبرمجة الواجهة الأمامية في منصّة متكاملة واقعية.</p>"
}
',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782415006/portfolio/v2/projects/7/t0wxfes8g05rpadhtqfu.png',
                'main_image_public_id' => 'portfolio/v2/projects/7/t0wxfes8g05rpadhtqfu',
                'start_date' => '2024-04-01',
                'end_date' => '2024-09-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-06-25 22:16:44',
                'updated_at' => '2026-06-25 22:37:03',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => '{"en":"Future Code","ar":"Future Code"}',
                'slug' => 'future-code',
                'tiny_description' => '{"en":"Backend Software Engineer & Team Leader at Future Code, building scalable Laravel systems, leading a cross‑functional team.","ar":"مهندس Backend وقائد فريق في Future Code، عملت على أنظمة Laravel قابلة للتوسع، أقود فريقاً متعدد التخصصات."}',
            'description' => '{"en":"<p><strong>Future Code (Jan 2025 – May 2026)</strong></p><br><p>I worked as a Backend Software Engineer and Team Leader, where I developed scalable Laravel APIs for mobile and web applications in <strong>e‑commerce</strong>, <strong>business management</strong>, and <strong>real‑time systems</strong>. I led the migration from single‑currency platforms to a <strong>multi‑currency architecture</strong>, including redesigning financial logic and restructuring databases to ensure accuracy and scalability.</p><br><ul><li><p>Contributed to ~15 projects in collaboration with frontend and QA teams</p></li><li><p>Designed a reusable backend template adopted by the company, including roles, user management, notifications, API structure, and error handling</p></li><li><p>Reduced project startup time by 30–40% through the reusable architecture</p></li><li><p>Led a cross‑functional team of 6–7 members (Flutter, Web, QA)</p></li><li><p>Planned tasks, supervised delivery, and continued hands‑on backend development</p></li></ul>","ar":"<p><strong>Future Code (كانون الثاني 2025 – أيار 2026)</strong></p><br><p>عملت كمهندس Backend وقائد فريق، حيث طوّرت واجهات Laravel قابلة للتوسع لتطبيقات الويب والموبايل في <strong>مجالات التجارة الإلكترونية</strong> و<strong>إدارة الأعمال</strong> و<strong>التطبيقات الزمن الحقيقي (real-time)</strong>. قدت عملية الانتقال من نظام العملة الواحدة إلى <strong>نظام متعدد العملات</strong>، بما في ذلك إعادة تصميم المنطق المالي وإعادة هيكلة قواعد البيانات لضمان الدقة والقابلية للتوسع.</p><br><ul><li><p>المساهمة في تطوير نحو 15 مشروعاً بالتعاون مع فرق الواجهة الأمامية وفرق الجودة</p></li><li><p>تصميم قالب جاهز للـ Backend ليعتمد بواسطة الشركة يشمل الصلاحيات، إدارة المستخدمين، الإشعارات، هيكلة الـ API، ومعالجة الأخطاء</p></li><li><p>تقليل وقت بدء المشاريع بنسبة 30–40% بسبب استخدام القالب</p></li><li><p>قيادة فريق متعدد التخصصات مكوّن من 6–7 أعضاء (Flutter، Web، QA)</p></li><li><p>تخطيط المهام، والإشراف على التسليم مع الاستمرار في تطوير الـ Backend</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782442764/portfolio/v2/projects/8/lfhbb92jgmxwybzghqop.png',
                'main_image_public_id' => 'portfolio/v2/projects/8/lfhbb92jgmxwybzghqop',
                'start_date' => '2025-01-01',
                'end_date' => '2026-05-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 1,
                'created_at' => '2026-06-26 05:58:55',
                'updated_at' => '2026-06-29 06:45:06',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => '{"en":"Mova Car","ar":"Mova Car"}',
                'slug' => 'mova-car',
                'tiny_description' => '{"en":"MovaCar is a real-time taxi system in Syria that I worked on during my journey at Future Code as the Project Manager and Team Leader. It is considered one of the largest projects I developed and supervised.","ar":"MovaCar هو نظام تاكسي لحظي في سوريا، عملت عليه خلال مسيرتي في Future Code كمدير مشروع وقائد فريق, حيث يعتبر واحد من أكبر المشاريع التي قمت بتنفيذها واشرفت عليها."}',
            'description' => '{"en":"<p><strong>MovaCar Taxi System (Laravel + Reverb)</strong></p><p>MovaCar is a real-time Syrian taxi platform developed during my journey at <strong>Future Code</strong>, where I served as the Project Manager and Team Leader.<br>The system targets yellow taxis and provides a fully interactive, real-time experience for both drivers and passengers.</p><br><p>I implemented real-time driver tracking using <strong>Laravel Reverb</strong>, enabling live location updates on the map. I also built a custom trip-sharing web page and delivered real-time updates for trip status, pricing, and driver movement.</p><br><ul><li><p>Real-time driver tracking with Laravel Reverb and live map updates</p></li><li><p>Custom trip-sharing page with dynamic session handling</p></li><li><p>Real-time updates for trip status, pricing, and driver movement</p></li><li><p>Integration with internal systems (POS, customer service, admin tools)</p></li><li><p>Contribution to a complex pricing engine (coupons, shifts, seasons, compensation)</p></li><li><p>Led the project as Project Manager &amp; Team Leader</p></li></ul><br>","ar":"<p><strong>MovaCar Taxi System (Laravel + Reverb)</strong></p><p>MovaCar هو نظام تاكسي في سوريا تم تطويره خلال مسيرتي في شركة <strong>Future Code</strong>، حيث عملت كمدير مشروع وقائد فريق.<br>يستهدف النظام سيارات الأجرة الصفراء ويوفّر تجربة لحظية متكاملة للسائقين والركاب.</p><br><p>قمت بتنفيذ تتبّع السائقين لحظياً باستخدام <strong>Laravel Reverb</strong> مع عرض الموقع على الخريطة بشكل مباشر. كما طوّرت صفحة مخصّصة لمشاركة الرحلات، وقدّمت تحديثات لحظية لحالة الرحلة، التسعير، وحركة السائق.</p><br><ul><li><p>تتبّع لحظي للسائقين باستخدام Laravel Reverb مع تحديثات مباشرة على الخريطة</p></li><li><p>صفحة مخصّصة لمشاركة الرحلات</p></li><li><p>تحديثات لحظية لحالة الرحلة، التسعير، وحركة السائق</p></li><li><p>دعم وربط النظام بأنظمة داخلية (نقاط البيع، خدمة العملاء، أدوات الإدارة)</p></li><li><p>المساهمة في بناء محرك تسعير معقّد (قسائم، ورديات، مواسم، تعويضات)</p></li><li><p>قيادة المشروع كمدير مشروع وقائد فريق</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782788062/portfolio/v2/projects/9/wtqr91ughmnsfislkebr.png',
                'main_image_public_id' => 'portfolio/v2/projects/9/wtqr91ughmnsfislkebr',
                'start_date' => '2025-08-01',
                'end_date' => '2025-12-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-06-30 05:54:11',
                'updated_at' => '2026-06-30 06:31:24',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => '{"en":"Blind Care Association","ar":"جمعيّة رعاية المكفوفين"}',
                'slug' => 'blind-care-association',
                'tiny_description' => '{"en":"Blind Care Association System is a full automation platform built to manage beneficiary registration, aid distribution, volunteer workflows, and communication for the Blind Care Association in Damascus.","ar":"نظام جمعية رعاية المكفوفين هو منصة مؤتمتة بالكامل طُوّرت لإدارة تسجيل المستفيدين، توزيع الإعانات، عمل المتطوعين، والتواصل داخل الجمعية في دمشق."}',
            'description' => '{"en":"<p></p><p><strong>The Blind Care Association System</strong> is a fully automated platform developed to replace the traditional paper‑based workflow used by the Blind Care Association in Damascus. I worked as a Backend Engineer using the Laravel framework, where the system includes an administration web application along with a dedicated Android application for beneficiaries.</p><p><br></p><p>The system enables registration and management of beneficiaries, volunteers, and staff, handling aid requests, recording donations, and organizing complete aid distribution operations. It also provides a dynamic evaluation system to classify beneficiaries based on need, an automated notification system for distribution events, and detailed reporting tools covering beneficiaries, donations, and financial activities.</p><p><br></p><p>During my volunteer period from March 2023 to January 2024, I played a key role in designing and implementing the backend architecture, ensuring accessibility for blind users, high performance, multi-layered security, and reliable communication through FCM notifications. The project was successfully delivered in November 2023, and I received an official recommendation letter from the Chairman of the Blind Care Association in recognition of my efforts and the positive impact of the system.</p><p><br></p><ul><li><p>Automated registration, aid requests, and beneficiary evaluations</p></li><li><p>Integrated aid distribution system with QR-based verification</p></li><li><p>Dynamic roles, permissions, and volunteer/staff management</p></li><li><p>Comprehensive reporting (PDF/Excel) for donations and beneficiaries</p></li><li><p>Android applications for beneficiaries and administrators</p></li><li><p>Accessibility support for blind users (screen reader compatibility)</p></li><li><p>Successfully delivered and supported by an official recommendation letter</p></li></ul><p><br></p>","ar":"<p>نظام <strong>جمعية رعاية المكفوفين</strong> هو منصة مؤتمتة بالكامل تم تطويرها لاستبدال العمل الورقي التقليدي داخل جمعية رعاية المكفوفين في دمشق. عملت كمهندس Backend باستخدام إطار Laravel، يحوي النظام تطبيق ويب خاص بالإدارة بالإضافة إلى تطبيق أندرويد خاص بالمستفيدين.</p><br><p>يتيح النظام تسجيل المستفيدين والمتطوعين والموظفين، وإدارة طلبات الإعانة، وتسجيل التبرعات، وتنظيم عمليات توزيع الإعانات بشكل كامل. كما يوفر نظام تقييم ديناميكي لتصنيف المستفيدين حسب درجة الحاجة، ونظام إشعارات مؤتمت لإبلاغ المستفيدين بعمليات التوزيع، إضافة إلى تقارير تفصيلية حول المستفيدين والتبرعات والنشاطات المالية.</p><br><p>خلال فترة عملي التطوعي من آذار 2023 حتى كانون الثاني 2024، لعبت دوراً أساسياً في تصميم وتنفيذ البنية الخلفية للنظام، وضمان توافقه مع معايير إمكانية الوصول للمكفوفين، وتحقيق أداء عالٍ، وتأمين النظام عبر طبقات صلاحيات متعددة، ودعم الإشعارات عبر FCM. تم تسليم المشروع بنجاح في تشرين الثاني 2023، وحصلت على رسالة توصية رسمية من رئيس مجلس الإدارة تقديراً لجهودي وتأثير النظام على الجمعية.</p><br><ul><li><p>أتمتة تسجيل المستفيدين وطلبات الإعانة والتقييمات</p></li><li><p>نظام توزيع إعانات متكامل مع التحقق عبر QR</p></li><li><p>إدارة الصلاحيات والمتطوعين والموظفين بشكل ديناميكي</p></li><li><p>تقارير شاملة (PDF/Excel) حول التبرعات والمستفيدين</p></li><li><p>تطبيقات أندرويد للمستفيدين والإدارة</p></li><li><p>دعم إمكانية الوصول للمكفوفين (قارئ الشاشة)</p></li><li><p>تسليم ناجح مدعوم برسالة توصية رسمية</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782851066/portfolio/v2/projects/10/iwcogzb8oqsnvqdgp1mh.png',
                'main_image_public_id' => 'portfolio/v2/projects/10/iwcogzb8oqsnvqdgp1mh',
                'start_date' => '2023-03-01',
                'end_date' => '2023-07-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-06-30 22:55:29',
                'updated_at' => '2026-06-30 23:30:38',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => '{"en":"Wayak Taxi","ar":"تاكسي ويّاك"}',
                'slug' => 'wayak-taxi',
            'tiny_description' => '{"en":"Wayak is a real-time taxi application in Iraq that I developed as a freelancing Full-Stack project. It provides live driver tracking, trip management, and real-time updates, built specifically for the Iraqi market.","ar":"ويّاك هو تطبيق تاكسي في العراق، قمت بتطويره كمشروع مستقل (Freelancing Full-Stack). يوفّر تتبّعاً للسائقين وإدارة للرحلات وتحديثات فورية, تطبيق مخصّص للسوق العراقي."}',
            'description' => '{"en":"<p><strong>Wayak Taxi Application (Laravel + React.JS + Reverb Real-Time Tracking)</strong></p><p>Wayak is a real-time taxi platform developed as a <strong>freelancing Full-Stack project</strong> for the Iraqi market. It provides a fully interactive experience for both drivers and passengers, offering live tracking, trip management, and real-time operational updates.</p><br><p>I implemented real-time driver tracking using Laravel’s broadcasting tools, enabling live location updates on the map. The system also includes trip creation and management, dynamic pricing logic, and real-time updates for driver movement, trip status, and passenger notifications.</p><br><ul><li><p>Real-time driver tracking with live map updates</p></li><li><p>Trip creation, management, and session handling</p></li><li><p>Real-time updates for trip status, pricing, and driver movement</p></li><li><p>Integration with internal tools for operations and support</p></li><li><p>Dynamic pricing engine adapted for the Iraqi market</p></li><li><p>Delivered as a complete freelancing project with full backend implementation</p></li></ul><br>","ar":"<p><strong>Wayak Taxi Application (Laravel + React.JS + Reverb Real-Time Tracking)</strong></p><p>Wayak هو تطبيق تاكسي لحظي تم تطويره <strong>كمشروع مستقل (Full-Stack Freelancing)</strong> للسوق العراقي. يوفّر تجربة تفاعلية كاملة للسائقين والركاب، مع تتبّع لحظي، إدارة للرحلات، وتحديثات فورية.</p><br><p>قمت بتنفيذ تتبّع السائقين لحظياً باستخدام أدوات البث في Laravel، مما يتيح تحديث الموقع على الخريطة بشكل مباشر. كما يوفّر النظام إنشاء الرحلات وإدارتها، منطق تسعير ديناميكي، وتحديثات لحظية لحركة السائق وحالة الرحلة وإشعارات الركاب.</p><br><ul><li><p>تتبّع لحظي للسائقين مع تحديثات مباشرة على الخريطة</p></li><li><p>إنشاء الرحلات وإدارتها ومعالجة الجلسات</p></li><li><p>تحديثات لحظية لحالة الرحلة، التسعير، وحركة السائق</p></li><li><p>ربط مع أدوات داخلية لدعم العمليات والإدارة</p></li><li><p>محرك تسعير ديناميكي مخصّص للسوق العراقي</p></li><li><p>تسليم المشروع بالكامل كمشروع Freelancing مع تنفيذ كامل للـ Backend</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782934502/portfolio/v2/projects/11/ueiussh6wg34e09jtntd.png',
                'main_image_public_id' => 'portfolio/v2/projects/11/ueiussh6wg34e09jtntd',
                'start_date' => '2026-03-01',
                'end_date' => '2026-05-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-07-01 22:34:55',
                'updated_at' => '2026-07-02 23:02:07',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => '{"en":"Cargo X","ar":"Cargo X"}',
                'slug' => 'cargo-x',
                'tiny_description' => '{"en":"CargoX is a Saudi logistics and customs‑clearance platform where I worked as a Frontend Developer to build the admin dashboard using React.js. I developed interfaces for managing shipments, drivers, clients, and operational workflows.","ar":"CargoX هو نظام سعودي لخدمات النقل والشحن والتخليص الجمركي، عملت فيه كمطوّر واجهات أمامية لبناء لوحة التحكم باستخدام React.js، حيث طوّرت واجهات إدارة الشحنات والسائقين والعملاء والعمليات التشغيلية."}',
                'description' => '{
  "en": "<p><strong>CargoX Admin Dashboard (React.js)</strong></p><p>CargoX is a logistics and customs‑clearance platform operating in Saudi Arabia. I worked as a Frontend Developer to build the administration dashboard using <strong>React.js</strong>, focusing on creating fast, clean, and scalable interfaces for managing the platform’s core operations.</p><br><p>The dashboard provides tools for managing shipments, drivers, clients, delivery operations, and customs‑clearance workflows. I implemented responsive UI components, optimized state management, and ensured smooth interaction between the frontend and backend services to support real‑time operational needs.</p><br><ul><li><p>Developed the admin dashboard using React.js</p></li><li><p>Built interfaces for shipment management and tracking</p></li><li><p>Created modules for driver and client management</p></li><li><p>Implemented UI for customs‑clearance workflows</p></li><li><p>Optimized performance and state handling for large datasets</p></li><li><p>Delivered a responsive, production‑ready dashboard for Saudi logistics operations</p></li></ul><br>",

  "ar": "<p><strong>لوحة تحكم CargoX (React.js)</strong></p><p>CargoX هو نظام سعودي لخدمات النقل والشحن والتخليص الجمركي. عملت كمطوّر واجهات أمامية لبناء لوحة التحكم باستخدام <strong>React.js</strong>، مع التركيز على تطوير واجهات سريعة ومنظمة وقابلة للتوسّع لإدارة العمليات الأساسية للنظام.</p><br><p>توفّر لوحة التحكم أدوات لإدارة الشحنات، السائقين، العملاء، عمليات التوصيل، ومسارات التخليص الجمركي. قمت بتنفيذ مكوّنات واجهة مستخدم متجاوبة، وتحسين إدارة الحالة، وضمان تفاعل سلس بين الواجهة الأمامية والخدمات الخلفية لدعم العمليات التشغيلية في الوقت الفعلي.</p><br><ul><li><p>تطوير لوحة التحكم باستخدام React.js</p></li><li><p>بناء واجهات إدارة وتتبع الشحنات</p></li><li><p>إنشاء وحدات لإدارة السائقين والعملاء</p></li><li><p>تنفيذ واجهات خاصة بعمليات التخليص الجمركي</p></li><li><p>تحسين الأداء وإدارة الحالة للتعامل مع البيانات الكبيرة</p></li><li><p>تسليم لوحة تحكم متجاوبة وجاهزة للإنتاج لخدمات النقل والشحن في السعودية</p></li></ul>"
}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783023582/portfolio/v2/projects/12/wjaqbzr0ncsornezezfn.png',
                'main_image_public_id' => 'portfolio/v2/projects/12/wjaqbzr0ncsornezezfn',
                'start_date' => '2026-04-01',
                'end_date' => '2026-08-01',
                'is_draft' => 1,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 0,
                'created_at' => '2026-07-02 23:13:44',
                'updated_at' => '2026-10-09 04:10:52',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => '{"en":"Rock, Paper & Scissors","ar":"حجرة, ورقة & مقص"}',
                'slug' => 'rock-paper-scissors',
                'tiny_description' => '{"en":".Rock, Paper & Scissors is a fully redesigned frontend game built with HTML, CSS, and JavaScript. I implemented animations, effects, local‑storage scoring, two game modes, and PWA ","ar":"Rock, Paper & Scissors هو لعبة واجهات أمامية مطوّرة باستخدام HTML وCSS وJavaScript، قمت بإعادة تصميمها بالكامل مع إضافة تأثيرات ورسوم متحركة ونظام حفظ النقاط عبر Local Storage، بالإضافة إلى دعم PWA."}',
            'description' => '{"en":"<p><strong>Rock, Paper &amp; Scissors — Frontend Game (HTML, CSS, JavaScript, PWA)</strong></p><p>Rock, Paper &amp; Scissors is a fully redesigned web game built as part of a <strong>Frontend Mentor</strong> challenge. I rebuilt the entire interface using <strong>HTML, CSS, and JavaScript</strong>, added animations and effects, and introduced multiple gameplay enhancements to elevate the experience beyond the original challenge.</p><br><p>The game includes <strong>two play modes</strong>, a dynamic scoring system stored using <strong>Local Storage</strong>, and the ability to reset progress. I also implemented <strong>PWA support</strong>, allowing the game to be installed as a standalone application on Windows, macOS, Linux, Android, and iOS.</p><br><ul><li><p>Complete redesign of the game interface</p></li><li><p>Two gameplay modes with custom UI</p></li><li><p>Animations, transitions, and visual effects</p></li><li><p>Local Storage scoring system with reset option</p></li><li><p>PWA support for installation on all platforms</p></li><li><p>Developed as a Frontend Mentor challenge with extended features</p></li></ul><br>","ar":"<p><strong>Rock, Paper &amp; Scissors — لعبة واجهات أمامية (HTML, CSS, JavaScript, PWA)</strong></p><p>Rock, Paper &amp; Scissors هي لعبة ويب قمت بإعادة تصميمها بالكامل ضمن تحدي <strong>Frontend Mentor</strong>. تم بناء الواجهة باستخدام <strong>HTML وCSS وJavaScript</strong> مع إضافة تأثيرات ورسوم متحركة وتحسينات عديدة لتقديم تجربة أفضل من النسخة الأصلية.</p><br><p>تتضمن اللعبة <strong>وضعين للّعب</strong>، ونظام نقاط يعتمد على <strong>Local Storage</strong> مع إمكانية إعادة التعيين. كما قمت بإضافة دعم <strong>PWA</strong> لجعل اللعبة قابلة للتثبيت على أنظمة Windows وmacOS وLinux وAndroid وiOS كتطبيق مستقل.</p><br><ul><li><p>إعادة تصميم كاملة لواجهة اللعبة</p></li><li><p>وضعان للّعب مع واجهة مخصّصة</p></li><li><p>تأثيرات ورسوم متحركة وانتقالات</p></li><li><p>نظام نقاط باستخدام Local Storage مع إمكانية إعادة الضبط</p></li><li><p>دعم PWA للتثبيت على جميع المنصات</p></li><li><p>تم تطويرها كتحدي من Frontend Mentor مع ميزات إضافية</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1783026028/portfolio/v2/projects/13/tq6ov1rospxfshysxjve.png',
                'main_image_public_id' => 'portfolio/v2/projects/13/tq6ov1rospxfshysxjve',
                'start_date' => '2023-02-01',
                'end_date' => '2023-03-01',
                'is_draft' => 0,
                'url' => 'https://github.com/Philip-Droubi/Rock-Paper-Scissors',
                'live_url' => 'https://philip-droubi.github.io/Rock-Paper-Scissors',
                'is_company' => 0,
                'created_at' => '2026-07-03 00:00:22',
                'updated_at' => '2026-07-03 00:15:12',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => '{"en":"Alburaq Group","ar":"مجموعة البراق"}',
                'slug' => 'alburaq-group',
                'tiny_description' => '{"en":"Software Engineer & Backend Developer at Alburaq Group, working on the company’s ERP system and its website.","ar":"مهندس برمجيات ومطوّر Backend في مجموعة البراق، أعمل على نظام ERP الخاص بالشركة وموقعها الإلكتروني."}',
            'description' => '{"en":"<p>I work as a Software Engineer and Backend Developer on <strong>Alburaq Brain</strong>, the company&#039;s internal ERP system that covers sourcing, quotations, purchasing, shipping, finance and HR. I also work on the company website and its customer portal.</p><br><ul><li><p>Built an <strong>AI help assistant</strong> that answers employees by text or voice, step by step, and shows them where to click on the screen</p></li><li><p>Built the full <strong>order flow</strong>: sourcing request → quotations → purchase order → invoice → shipment</p></li><li><p>Built <strong>Excel import</strong> for factory price sheets (English, Arabic and Chinese) that creates products and quotations automatically</p></li><li><p>Generated <strong>PDF and Excel documents</strong> (invoices, quotations) with Arabic and Chinese text</p></li><li><p>Worked on the finance module, the roles and permissions system, and the HR pages</p></li><li><p>Connected the <strong>customer portal</strong> (Django, 8 languages) to the ERP: login, orders, shipments and invoices</p></li><li><p>Worked on the <strong>Titan Project</strong> and other e-commerce projects</p></li></ul>","ar":"<p>أعمل كمهندس برمجيات ومطوّر Backend على نظام <strong>Alburaq Brain</strong>، وهو نظام ERP داخلي للشركة يشمل طلبات التوريد، عروض الأسعار، المشتريات، الشحن، المالية والموارد البشرية. كما أعمل على موقع الشركة وبوابة العملاء.</p><br><ul><li><p>بناء <strong>مساعد ذكي (AI)</strong> يجيب الموظفين بالكتابة أو بالصوت خطوة بخطوة، ويدلّهم على مكان الضغط في الشاشة</p></li><li><p>بناء <strong>دورة الطلب</strong> كاملة: طلب التوريد ← عروض الأسعار ← أمر الشراء ← الفاتورة ← الشحنة</p></li><li><p>بناء <strong>استيراد ملفات Excel</strong> لأسعار المصانع (بالعربية والإنجليزية والصينية) لإنشاء المنتجات وعروض الأسعار تلقائياً</p></li><li><p>إنشاء <strong>مستندات PDF وExcel</strong> (فواتير، عروض أسعار) تدعم النص العربي والصيني</p></li><li><p>العمل على النظام المالي، ونظام الأدوار والصلاحيات، وصفحات الموارد البشرية</p></li><li><p>ربط <strong>بوابة العملاء</strong> (Django، 8 لغات) مع نظام الـ ERP: تسجيل الدخول، الطلبات، الشحنات والفواتير</p></li><li><p>العمل على <strong>مشروع Titan</strong> ومشاريع تجارة إلكترونية أخرى</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1791509917/portfolio/v2/projects/14/or6qtuh8aahbfmdqlcmo.jpg',
                'main_image_public_id' => 'portfolio/v2/projects/14/or6qtuh8aahbfmdqlcmo',
                'start_date' => '2026-08-01',
                'end_date' => NULL,
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'is_company' => 1,
                'created_at' => '2026-10-09 04:10:17',
                'updated_at' => '2026-10-09 04:41:03',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => '{"en":"Disk Cleanup Helper","ar":"Disk Cleanup Helper"}',
                'slug' => 'disk-cleanup-helper',
                'tiny_description' => '{"en":"Disk Cleanup Helper, a free, open-source Windows 10 and 11 in 18 languages app that frees up space safely and checks disk health and SMART data.","ar":"تطبيق مجاني ومفتوح المصدر لنظامي Windows 10 و Windows 11 يحرّر المساحة بأمان ويفحص صحة الأقراص وبيانات SMART، ويدعم 18 لغة."}',
            'description' => '{"en":"<p>Disk Cleanup Helper is a free, open-source app for Windows 10 and 11. It helps people free up space safely, see what fills their drives and check their disks&#039; health.</p><p><br></p><h2>1. What is Disk Cleanup Helper?</h2><p>It is one small program with seven main tabs: Clean up, Analyze disk, Disk health, SMART details, Disk performance, Device details, and Tips &amp; FAQ. It is written in <strong>C# 5 and WPF on .NET Framework 4.8</strong>, which Windows already includes, and compiled with the C# compiler that ships with Windows: no Visual Studio, SDK or NuGet.</p><p><br></p><h2>2. Key Features</h2><h3>• Safe Cleanup</h3><ul><li><p>Cleans browser and app caches, temp files, old update files and Windows leftovers.</p></li><li><p>Items grouped by how careful to be: <strong>Safe, Admin, Your call, Setting, Info only</strong>.</p></li><li><p>Each item says what you keep and lose; nothing is deleted until you select it and confirm.</p></li><li><p>Never touches documents, photos, music, videos, desktop or downloads; browser cleanup keeps passwords and logins.</p></li><li><p>A previous Windows installation, System Restore, Docker and WSL are only shown, never deleted.</p></li></ul><p><br></p><h3>• Disk Analysis &amp; Health</h3><ul><li><p>Finds the biggest folders and files on any drive, with Windows and program files protected.</p></li><li><p>Reads each disk&#039;s SMART data (or the NVMe health log) for a health estimate, live temperature and history charts.</p></li><li><p>Live disk activity, a speed test, and a device report you can copy or save.</p></li></ul><p><br></p><h3>• Privacy &amp; Self-Updater</h3><ul><li><p>Sends nothing about your PC: no account, no ads.</p></li><li><p>Checks GitHub at most once a day (users can turn this off) and verifies each download&#039;s SHA256 and version number before replacing the running copy.</p></li></ul><p><br></p><h3>• 18 Languages &amp; Layout Testing</h3><ul><li><p>One translation layer with plural rules for every on-screen text, right-to-left layouts for Arabic, Persian and Urdu, and light and dark themes.</p></li><li><p>A language check runs with every build and stops it on translation errors.</p></li><li><p>Test switches save a picture of any tab in any language and theme, and list every cut-off text.</p></li></ul><p><br></p><h3>• Open Source &amp; Website</h3><ul><li><p>I released version 1.0 on GitHub on 18 October 2026 and the <a href=\\"https://github.com/Philip-Droubi/disk-cleanup-helper\\">source code</a> the next day, under the GNU GPL v3 with an attribution term.</p></li><li><p>A static Next.js <a href=\\"https://philip-droubi.github.io/disk-cleanup-helper/\\">website</a> in the same 18 languages and both themes, with SEO (per-language pages, hreflang, structured data, sitemap), on GitHub Pages.</p></li></ul>","ar":"<p>Disk Cleanup Helper هو تطبيق مجاني ومفتوح المصدر لنظامي Windows 10 و Windows 11، يساعد المستخدمين على تحرير المساحة بأمان، ومعرفة ما يملأ أقراصهم، وفحص صحة هذه الأقراص.</p><p><br></p><h2>1. ما هو Disk Cleanup Helper؟</h2><p>هو برنامج واحد صغير يضم سبع علامات تبويب رئيسية: التنظيف، وتحليل القرص، وصحة القرص، وتفاصيل SMART، وأداء القرص، وتفاصيل الجهاز، ونصائح وأسئلة شائعة. كُتب بلغة <strong>C# 5 وتقنية WPF على Microsoft .NET Framework 4.8</strong> المدمج في Windows، ويُبنى بمترجم C# 5 المرفق مع Windows نفسه، دون Visual Studio أو SDK أو NuGet.</p><p><br></p><h2>2. الميزات الرئيسية</h2><h3>• تنظيف آمن</h3><ul><li><p>تنظيف ذاكرات المتصفحات والتطبيقات المؤقتة، والملفات المؤقتة، وملفات التحديث القديمة، وبقايا Windows.</p></li><li><p>العناصر مجمّعة حسب مدى الحذر المطلوب: <strong>آمن، مسؤول، القرار لك، إعداد، للعرض فقط</strong>.</p></li><li><p>يوضّح كل عنصر ما تحتفظ به وما تفقده، ولا يُحذف أي شيء حتى تحدده وتؤكد.</p></li><li><p>لا يمسّ التنظيف أبدًا المستندات والصور والموسيقى ومقاطع الفيديو وسطح المكتب والتنزيلات، ويُبقي تنظيف المتصفحات على كلمات المرور وتسجيلات الدخول.</p></li><li><p>يكتفي بعرض تثبيت Windows السابق، واستعادة النظام، و Docker، و WSL، ولا يحذفها أبدًا.</p></li></ul><p><br></p><h3>• تحليل القرص وصحته</h3><ul><li><p>يعرض أكبر المجلدات والملفات على أي محرك أقراص، مع حماية ملفات Windows والبرامج.</p></li><li><p>يقرأ بيانات SMART لكل قرص (أو سجل الصحة في أقراص NVMe) ليعرض تقديرًا لصحته، ودرجة حرارته المباشرة، ومخططات السجل.</p></li><li><p>نشاط القرص المباشر، واختبار للسرعة، وتقرير عن الجهاز يمكنك نسخه أو حفظه.</p></li></ul><p><br></p><h3>• الخصوصية والتحديث الذاتي</h3><ul><li><p>لا يرسل أي شيء عن الكمبيوتر الخاص بك: بلا حساب وبلا إعلانات.</p></li><li><p>يسأل GitHub عن وجود إصدار جديد مرة واحدة في اليوم على الأكثر (ويمكن للمستخدم إيقاف ذلك)، ويتحقق من قيمة SHA256 ورقم الإصدار لكل ملف منزَّل قبل أن يستبدل النسخة قيد التشغيل.</p></li></ul><p><br></p><h3>• 18 لغة واختبار الواجهة</h3><ul><li><p>طبقة ترجمة واحدة تراعي صيغ الجمع لكل النصوص الظاهرة، وواجهة من اليمين إلى اليسار للعربية والفارسية والأردية، ووضعان فاتح وداكن.</p></li><li><p>فحص للترجمات يعمل مع كل عملية بناء ويوقفها عند وجود أي خطأ في الترجمة.</p></li><li><p>خيارات اختبار في سطر الأوامر تحفظ صورة لأي علامة تبويب بأي لغة وأي وضع، وتسرد كل نص مقطوع.</p></li></ul><p><br></p><h3>• المصدر المفتوح والموقع الإلكتروني</h3><ul><li><p>طرحت الإصدار 1.0 على GitHub في 18 أكتوبر 2026، ونشرت <a href=\\"https://github.com/Philip-Droubi/disk-cleanup-helper\\">الشيفرة المصدرية</a> في اليوم التالي بموجب رخصة GNU GPL v3 مع شرط إضافي يحفظ نسبة العمل إلى مؤلفه.</p></li><li><p><a href=\\"https://philip-droubi.github.io/disk-cleanup-helper/\\">موقع إلكتروني</a> ثابت مبني باستخدام Next.js باللغات الـ 18 نفسها وبالوضعين الفاتح والداكن، مع تحسين محركات البحث SEO (صفحة لكل لغة، و hreflang، وبيانات منظمة، وخريطة للموقع)، وهو منشور على GitHub Pages.</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1792413511/portfolio/v2/projects/15/gowhdsjpncymubf1m9en.jpg',
                'main_image_public_id' => 'portfolio/v2/projects/15/gowhdsjpncymubf1m9en',
                'start_date' => '2026-10-01',
                'end_date' => NULL,
                'is_draft' => 0,
                'url' => 'https://github.com/Philip-Droubi/disk-cleanup-helper',
                'live_url' => 'https://philip-droubi.github.io/disk-cleanup-helper/',
                'is_company' => 0,
                'created_at' => '2026-10-19 15:38:30',
                'updated_at' => '2026-10-19 16:47:11',
            ),
        ));
        
        
    }
}