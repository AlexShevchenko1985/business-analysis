<?php
$data = !empty(get_field('hero_section')) ? get_field('hero_section') : null;
if (empty($data)) {
    return;
}

extract($data);
?>
<section id="block-developersforagenciesandinhouseteams"
     class="block hero-section <?php echo $type; ?>">
     <div class="container-lg">
	    <div class="block__content row">

	        <div class="hero-text col-lg-6">

	            <?php if (!empty($title)): ?>
	                <h1 class="block__title"><?php echo $title; ?></h1>
	            <?php endif; ?>

	            <div class="text-content clearfix field field--name-body field--type-text-with-summary field--label-hidden field__item">
	                <?php if (!empty($text)): ?>
	                    <?php echo $text; ?>
	                <?php endif; ?>
	            </div>

	            <?php if (!empty($button)): ?>
	                <div class="field field--name-field-cta field--type-link field--label-hidden field__item">
	                    <a href="javascript:void(0)" class="webform-dialog webform-dialog-normal button-cta"><?php echo $button; ?></a>
	                </div>
	            <?php endif; ?>

	        </div>

	        <?php if (!empty($image)): ?>
	            <div class="hero-image col-lg-6">
	                <div class="field field--name-field-hero-image field--type-entity-reference field--label-hidden field__item">
	                    <div class="media media--type-image media--view-mode-hero-image">
	                        <div class="paragraph-image-item">
	                            <?php echo wp_get_attachment_image($image, 'large'); ?>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        <?php endif; ?>

	    </div>
	 </div>
</section>

<section class="two-columns-with-title">
	<div class="container-lg">
		<div class="heading">
			<h2>Meet Ivan Klepikovski — Head<br> of Business Analysis at XX</h2>
		</div>
		<div class="columns-holder">
			<div class="image">
				<img src="/wp-content/themes/business-analysis/src/images/head-pic.webp" alt="Head photo">
			</div>
			<div class="content">
				<p>At XX, our <strong>Business Analysis & Planning services</strong> go beyond just planning software solutions on time and within budget. We laser-focus on developing unique strategies that shape your business vision and engage customers. All projects are guided by the expert hands of our Head of Business Analysis, <strong>Ivan Klepikovski</strong>.</p>
				<p>Ivan is a highly skilled Business Analyst with over 12 years of experience in Business Analysis and Project Management. Before transitioning to the software industry, he successfully managed projects across heavy industry, manufacturing, metallurgical, and mining sectors. In these roles, he collaborated with globally renowned consulting firms, including McKinsey & Company, Boston Consulting Group, and Ernst & Young, to deliver impactful results.</p>
				<p>Performing as a <strong>Head of Business Analysis and Planning</strong> at XX, Ivan specializes in IT-focused solutions to drive business transformation and efficiency. Ivan has successfully delivered projects across North America, helping businesses achieve their goals by providing exceptional results through strategic insights, modern technology, and custom approaches.</p>
			</div>
		</div>
	</div>
</section>

<section class="docs-slider">
	<div class="container-lg">
		<div class="documents-slider">
			<div class="nav-btn">
                <div class="swiper-doc-button-prev js-button-prev">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="16" cy="16" r="16" fill="#D3D3D3"/>
                    <circle cx="16" cy="16" r="16" fill="#E8E8E8"/>
                    <path d="M18 20L14 16L18 12" stroke="#0706FF" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="swiper-doc-button-next js-button-next">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#D3D3D3"/>
                    <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#E8E8E8"/>
                    <path d="M14 20L18 16L14 12" stroke="#0706FF" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
			<div class="swiper js-documents-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="image">
                            <img src="/wp-content/themes/business-analysis/src/images/doc1.webp" alt="Document">
                        </div>
					</div>
					<div class="swiper-slide">
                        <div class="image">
                            <img src="/wp-content/themes/business-analysis/src/images/doc2.webp" alt="Document">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="/wp-content/themes/business-analysis/src/images/doc3.webp" alt="Document">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="/wp-content/themes/business-analysis/src/images/doc1.webp" alt="Document">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="/wp-content/themes/business-analysis/src/images/doc2.webp" alt="Document">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="/wp-content/themes/business-analysis/src/images/doc3.webp" alt="Document">
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="image">
                            <img src="/wp-content/themes/business-analysis/src/images/doc3.webp" alt="Document">
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<div class="description">
			<p>Ivan’s expertise, combined with a proven track record of success, has positioned him as a key contributor to the company’s growth and client satisfaction. For more information, visit Ivan’s profile on <a href="" target="_blank">LinkedIn</a>.</p>
			<div class="btn-holder">
                <a href="javascript:void(0)" class="button-cta">Talk to us</a>
            </div>
		</div>
	</div>

	<div id="slider-popup" style="display: none;">
        <div class="slider-popup-holder">
            <div class="nav-wrap">
            <div class="navigation-popup-slider">
	            <div class="nav-btn">
	                <div class="swiper-button-prev js-popup-button-prev">
	                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="16" fill="#ffffff"/>
                        <circle cx="16" cy="16" r="16" fill="#ffffff"/>
                        <path d="M18 20L14 16L18 12" stroke="#3837E5" stroke-width="2" stroke-linecap="round"/>
                        </svg>
	                </div>
	                <div class="swiper-pagination pagination-slider-popup"></div>
	                <div class="swiper-button-next js-popup-button-next">
	                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#ffffff"/>
                        <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#ffffff"/>
                        <path d="M14 20L18 16L14 12" stroke="#3837E5" stroke-width="2" stroke-linecap="round"/>
                        </svg>
	                </div>
	            </div>
	        </div>
            <div id="slider-popup-close">
                <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_2036_2559)">
                <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 47 15)" fill="white"/>
                </g>
                <path d="M27 35L35 27M27 27L35 35" stroke="#0706FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <defs>
                <filter id="filter0_d_2036_2559" x="0" y="0" width="62" height="62" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="7.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2036_2559"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2036_2559" result="shape"/>
                </filter>
                </defs>
                </svg>
            </div>
            </div>

            <div class="swiper js-slider-popup">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="image">
                                <img src="/wp-content/themes/business-analysis/src/images/doc1.webp" alt="Document">
                            </div>
                            <div class="doc-description">Professional in Business Analysis</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="image">
                                <img src="/wp-content/themes/business-analysis/src/images/doc2.webp" alt="Document">
                            </div>
                            <div class="doc-description">University - Management</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
	                    <div class="slide-holder">
	                        <div class="image">
	                            <img src="/wp-content/themes/business-analysis/src/images/doc3.webp" alt="Document">
	                        </div>
	                        <div class="doc-description">University - Management</div>
	                    </div>
	                </div>
	                <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="image">
                                <img src="/wp-content/themes/business-analysis/src/images/doc1.webp" alt="Document">
                            </div>
                            <div class="doc-description">Professional in Business Analysis</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="image">
                                <img src="/wp-content/themes/business-analysis/src/images/doc2.webp" alt="Document">
                            </div>
                            <div class="doc-description">University - Management</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="image">
                                <img src="/wp-content/themes/business-analysis/src/images/doc3.webp" alt="Document">
                            </div>
                            <div class="doc-description">University - Management</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="image">
                                <img src="/wp-content/themes/business-analysis/src/images/doc3.webp" alt="Document">
                            </div>
                            <div class="doc-description">University - Management</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
	<div class="container-lg">
		<div class="cards-holder">
			<div class="item transparent-item">
				<div class="sup-title">PRE-DEVELOPMENT PHASE</div>
				<div class="title">BA Services We Offer</div>
				<p>It is impossible to imagine a successful project implementation and product launch without business analysts. Their role in the development process can’t be overestimated. Business analysts are experts who bring tangible results to projects across industries. AT XX, we understand the importance of full-service BA services and offer a full-stack service to our clients.</p>
			</div>
			<div class="item">
				<div class="heading">
					<img src="/wp-content/themes/business-analysis/src/images/s-icon1.svg" alt="Service icon">
					<h4>Discovery phase</h4>
				</div>
				<p>The discovery phase plays a pivotal role in product development. Our business analysts thoroughly investigate your market niche, as well as analyze competitors, to identify and validate growth opportunities, address changes, and create practical and unique strategies for your product development. During the discovery phase, our BA consultants build high-level solution visioning for the implementation of your business objectives.</p>
				<a href="" class="arrow-btn">View more details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
			</div>
			<div class="item">
                <div class="heading">
                    <img src="/wp-content/themes/business-analysis/src/images/s-icon2.svg" alt="Service icon">
                    <h4>Eliciting requirements</h4>
                </div>
                <p>Our BA specialists thoroughly perform the requirements elicitation stage to identify and validate the business requirements the project should follow. As a result, our clients get a report that prioritizes the development milestones and helps avoid under or over-delivering. The documented requirements facilitate communication between BA analysts and the dev team, providing all the necessary details on product creation.</p>
                <a href="" class="arrow-btn">View more details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
            </div>
            <div class="item">
                <div class="heading">
                    <img src="/wp-content/themes/business-analysis/src/images/s-icon3.svg" alt="Service icon">
                    <h4>Solution design</h4>
                </div>
                <p>Our expert business analysis service helps companies design valid technical solutions aligned with their core goals and objectives. It is crucial to ensure the viability of the digital solution from the start, as well as assess expected benefits, costs, and risks. The design of software solutions is an integral part of the business analysis process that includes the creation of models and wireframes, as well as the assessment of the product’s technical feasibility.</p>
                <a href="" class="arrow-btn">View more details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
            </div>
            <div class="item">
                <div class="heading">
                    <img src="/wp-content/themes/business-analysis/src/images/s-icon4.svg" alt="Service icon">
                    <h4>Implementation<br> and testing</h4>
                </div>
                <p>After the comprehensive analysis is complete and the project scope & requirements are outlined, our business analysts closely collaborate with your dev team to guide each stage of the development life cycle. Our BA experts ensure the project stays aligned with business goals, as well as suggest adjustments based on validating test cases and User Acceptance Testing (UAT) to guarantee the final product brings real revenue.</p>
                <a href="" class="arrow-btn">View more details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
            </div>
            <div class="item">
                <div class="heading">
                    <img src="/wp-content/themes/business-analysis/src/images/s-icon5.svg" alt="Service icon">
                    <h4>Development support</h4>
                </div>
                <p>After the product is launched, business analysis experts at Drupfan do not leave your company to chance. Instead, we offer end-to-end post-launch support that includes monitoring and analyzing the product’s post-release performance, user behavior, and goal achievement. Our BAs continuously identify opportunities for growth and improvement, recommend enhancements to stay competitive in the market, and ensure your product stays on top of the competitors.</p>
                <a href="" class="arrow-btn">View more details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
            </div>
		</div>
		<div class="btn-holder">
            <a href="javascript:void(0)" class="button-cta secondary-btn">Learn more about BA services</a>
        </div>
	</div>
</section>

<section class="two-columns-with-balls">
	<div class="container-lg">
		<div class="columns-holder">
			<div class="content-column">
				<div class="sup-title">OUR INDUSTRY EXPERTISE</div>
				<h2>Our Domains of Expertise in Business Analysis</h2>
				<p>Our teams of business analysts and consultants work closely with clients across diverse industries, taking the time to understand the unique challenges and needs of each niche.</p>
				<div class="list-block">
					<ul>
                        <li>E-commerce</li>
                        <li>Automotive</li>
                        <li>Forestry</li>
                        <li>Healthcare</li>
                        <li>Blockchain</li>
                        <li>Cryptocurrency</li>
                        <li>Beauty</li>
                        <li>Sport & Fitness</li>
                        <li>Education</li>
                        <li>Media & Publishing</li>
                        <li>Beverage Industry</li>
                    </ul>
                    <ul>
                        <li>Finance & Insurance</li>
                        <li>Startups</li>
                        <li>Logistics</li>
                        <li>Project Management</li>
                        <li>Construction</li>
                        <li>Manufacturing and operations</li>
                        <li>Engineering</li>
                        <li>Retail & Distribution</li>
                        <li>Mining and metallurgical enterprises</li>
                        <li>Ore-processing</li>
                        <li>Governmental institutions</li>
                    </ul>
				</div>
			</div>
			<div class="image-column">
				<img src="/wp-content/themes/business-analysis/src/images/drupfan-image2.webp" alt="Drupfan Image">
			</div>
		</div>
		<div class="slogan-block">
			<div class="btn-holder">
                <a href="javascript:void(0)" class="button-cta">Schedule a meeting</a>
            </div>
            <div class="slogan-item">
                <img src="/wp-content/themes/business-analysis/src/images/slogan-arrow.svg" alt="Arrow">
                <span>Haven’t found your industry?<br> Let’s talk and see how we can make it work for you!</span>
            </div>
		</div>
	</div>
</section>

<section class="business-cases">
	<div class="container-lg">
		<div class="heading">
			<div class="sup-title">WHAT WE DO</div>
			<h2>Latest Business Analysis Cases</h2>
		</div>
		<div class="business-cases-slider">
			<div class="swiper js-business-cases-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="title">
                                <a href="https://www.2toucans.com/">2Toucans</a>
                            </div>
                            <div class="description-holder">
                                <div class="project-name">
                                    <span>Project name</span>
                                    <p>HOME | 2Toucans (<a href="https://www.2toucans.com/" target="_blank">2toucans.com</a>)</p>
                                </div>
                                <div class="location">
                                    <span>Industry & Location</span>
                                    <p>Digital Marketing, United Kingdom</p>
                                </div>
                            </div>
                            <div class="image-block">
                                <img src="/wp-content/themes/business-analysis/src/images/project2.webp" alt="Project">
                            </div>
                            <div class="btn-holder">
                                <a href="" class="arrow-btn">View Details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="title">
                                <a href="http://wildstyle-network.com">Wildstyle Network</a>
                            </div>
                            <div class="description-holder">
                                <div class="project-name">
                                    <span>Project name</span>
                                    <p>Wildstyle Network - A Digital Agency Ahead of the Curve (<a href="http://wildstyle-network.com" target="_blank">wildstyle-network.com</a>)</p>
                                </div>
                                <div class="location">
                                    <span>Industry & Location</span>
                                    <p>Digital Marketing, Germany</p>
                                </div>
                            </div>
                            <div class="image-block">
                                <img src="/wp-content/themes/business-analysis/src/images/project1.webp" alt="Project">
                            </div>
                            <div class="btn-holder">
                                <a href="" class="arrow-btn">View Details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="title">
                                <a href="">Neilsen Active Holidays</a>
                            </div>
                            <div class="description-holder">
                                <div class="project-name">
                                    <span>Project name</span>
                                    <p>Website Creation, Maintenance, and Support for Neilsen Active Holidays (<a href="https://www.neilson.co.uk/" target="_blank">neilson.co.uk</a>)</p>
                                </div>
                                <div class="location">
                                    <span>Industry & Location</span>
                                    <p>Travel and Leisure, United Kingdom</p>
                                </div>
                            </div>
                            <div class="image-block">
                                <img src="/wp-content/themes/business-analysis/src/images/project3.webp" alt="Project">
                            </div>
                            <div class="btn-holder">
                                <a href="" class="arrow-btn">View Details <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>

<section class="list-with-numbers">
	<div class="container-lg">
        <div class="heading">
            <div class="sup-title">BA TASKS</div>
            <h2>What Does Business Analysis Involve?</h2>
            <p>Business analysis in product development can’t be overestimated. BA service not only helps to determine how to align digital solutions with current market demands but also helps to build long and short-term strategies for company growth and revenue generation. A successful product launch is only possible after a meticulous and rigorous investigation of the domain, as well as an understanding of customers’ needs and expectations. In addition, the refinement of requirements and documentation facilitates communication between the stakeholders and development teams.</p>
        </div>
        <div class="list-with-numbers-grid">
            <div class="item">
                <div class="heading">
                    <div class="number">1</div>
                    <h4>Vision clarification</h4>
                </div>
                <p>Our BA experts explore the domain the client operates in and conduct thorough research to understand industry trends, target audience needs, and competitive landscapes. They closely collaborate with the project’s stakeholders to define clear objectives, develop a business vision, and align it with market demands.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">2</div>
                    <h4>Requirements elicitation</h4>
                </div>
                <p>Requirements elicitation is the backbone of successful strategy development in business analyst projects. At Drupfan, our dedicated business analysis consultants investigate your project’s history, goals, and objectives, to be able to define core project requirements and prioritize tasks. You receive a step-by-step plan with the eliciting requirements.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">3</div>
                    <h4>Competitors analysis</h4>
                </div>
                <p>With a proven track record of expertise across industries, including but not limited to automotive, construction, mining & metallurgical, eCommerce, finance, and healthcare, Drupfan business analysts delve into client’s domain and find effective solutions to overcome competitors on the market and brush up company’s strategies.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">4</div>
                    <h4>Development planning</h4>
                </div>
                <p>Our business consultants work closely with software developers to create well-structured and achievable plans for development projects, divided into measurable milestones. Our BA specialists also estimate the time and budget necessary for project development. In the end, you get a go-to plan with set deadlines.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">5</div>
                    <h4>Time and budget estimates</h4>
                </div>
                <p>Clear timelines and budgets are a silver bullet for a successful software project delivery. At Drupfan, our seasoned business analysts carefully plan project milestones and ensure every task is feasible and well-estimated. By providing accurate time & budget estimations, we help avoid rework and scope creep, keeping projects on track.</p>
            </div>
            <div class="item">
	            <div class="heading">
	                <div class="number">6</div>
	                <h4>Project documentation</h4>
	            </div>
	            <p>Keeping a record of key details, instructions, and essential aspects of the project is of paramount importance for every business. Our business analysts develop comprehensive and transparent project documentation, ensuring clarity and a full understanding of project KPIs for all stakeholders.</p>
	        </div>
	        <div class="item">
                <div class="heading">
                    <div class="number">7</div>
                    <h4>Compliance services</h4>
                </div>
                <p>Compliance management is a demanding aspect of running a business. Our seasoned BA specialists bring deep expertise in regulatory requirements and provide comprehensive reports with actionable steps to ensure your business stays fully compliant. Let us help you navigate the challenges of regulatory compliance with confidence and ease.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">8</div>
                    <h4>End-to-end project support</h4>
                </div>
                <p>Our business analysts stay involved in the technical implementation of your project throughout each stage of the development life cycle. Our BAs proactively monitor processes to ensure everything runs smoothly and are available to address any issues or challenges that arise during the project.</p>
            </div>
        </div>
        <div class="arrow-block">
            <div class="descr">Does your business need a powerful strategy to stay ahead of competitors?<br> We have you covered!</div>
        </div>
        <div class="btn-holder">
            <a href="javascript:void(0)" class="button-cta">Hire business analyst</a>
        </div>
    </div>
</section>

<section class="two-columns-text">
	<div class="container-lg">
        <div class="heading">
            <div class="sup-title">WHY CHOOSE BA</div>
            <h2>Why Does Your Company Need<br> Business Analysts On Board?</h2>
        </div>
        <div class="columns-holder">
            <div class="column">
                <p>The most challenging part of any project implementation is bridging the gap between the business side and the development team, while also striking the balance between what clients need and how to make your product stand out. That’s where a Business Analyst steps in to make it all come together. A Business Analyst is like a magician who transforms ideas and expectations into a tangible, actionable plan.</p>
                <h5>To build a powerful product strategy</h5>
                <p>Invest in the discovery phase and let experienced BA specialists build effective short- and long-term strategies for your business. With expert BA consulting, you can focus on the development of features and functionalities that bring tangible results and avoid wasting resources on unvalidated ideas.</p>
                <h5>To assess and eliminate risks</h5>
                <p>When it comes to product development, it is crucial to understand and timely address all risks, as well as build a mutual understanding of project goals between stakeholders and the tech team. A professional business analyst is someone who stays closely involved in the project, monitoring its progress and making timely adjustments to strategy and scope to minimize risks.</p>
                <h5>To streamline business-to-team communication</h5>
                <p>Hire a business analyst to bridge the gap between the business and tech team sides, as well as maintain transparent and clear communication between all departments. BA consultant creates well-structured documentation on the project that helps facilitate communication. He ensures that the dev team has all the necessary information at each stage of product development.</p>
            </div>
            <div class="column">
                <h5>To assess time and budget</h5>
                <p>Time and budget are of paramount importance for any project. Hire a business analyst into your internal team to get clear estimations on timelines and costs. Besides, a skilled BA specialist helps to prioritize product features and ensures your budget is focused on the areas that need the most attention at the right time. BAs work side by side with you to optimize the allocation of resources and costs effectively.</p>
                <h5>To ensure software product meets business<br> objectives and end-user needs</h5>
                <p>A business analyst knows when a product is outdated, or out of sync with your goals, and isn’t afraid to cut features to boost ROI. Don’t jump straight into the software development process. Instead, invest in business analysis to understand the best way to build your product. Our professional business consultants explore the market needs and user behavior to advise you on the set of obligatory product features for ongoing success.</p>
                <h5>To monitor project development</h5>
                <p>Do not leave product development to chance. Hire a skilled business analyst to monitor each stage of product implementation and suggest adjustments as required.</p>
                <h5>To manage post-launch product support</h5>
                <p>Ensure your product remains up-to-date, relevant, and secure with expert BA post-launch support.</p>
            </div>
        </div>
        <div class="arrow-block">
            <div class="descr">Does your business need a BA consultation?<br> Partner with Drupfan’s business analysts.</div>
        </div>
        <div class="btn-holder">
            <a href="javascript:void(0)" class="button-cta">Hire business analyst</a>
        </div>
    </div>
</section>

<section class="products-technologies">
	<div class="container-md">
		<div class="heading">
            <div class="sup-title">OUR PRODUCTS</div>
            <h2>Drupfan Expertise in Products<br> and Technologies</h2>
        </div>
        <div class="table">
            <div class="table-row">
                <div class="title">Website<br> Development</div>
                <div class="logos">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/drupal.svg" alt="Drupal">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/wordpress.svg" alt="WordPress">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/magento.svg" alt="Magento">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/adobe.svg" alt="Adobe">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/vue.svg" alt="Vue">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/shopify.svg" alt="Shopify">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/symfony.svg" alt="Symfony">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/python.svg" alt="Python">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/flutter.svg" alt="Flutter">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/react.svg" alt="React">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/laravel.svg" alt="Laravel">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/angular.svg" alt="Angular">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/node.svg" alt="Node">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/next.svg" alt="Next">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/php.svg" alt="PHP">
                </div>
            </div>
            <div class="table-row">
                <div class="title">Web and Mobile<br> Applications Development</div>
                <div class="logos">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/iOS.svg" alt="IOS">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/android.svg" alt="Android">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/Java.svg" alt="Java">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/Kotlin.svg" alt="Kotlin">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/Swift.svg" alt="Swift">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/objective.svg" alt="Objective C">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/arcgis.svg" alt="ArcGIS">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/powerapps.svg" alt="PowerApps">
                </div>
            </div>
            <div class="table-row">
                <div class="title">Client Relationship<br> Management (CRM)</div>
                <div class="logos">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/Salesforce.svg" alt="Salesforce">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/microsoft.svg" alt="Microsoft">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/zoho.svg" alt="Zoho">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/Genesys.svg" alt="Genesys">
                </div>
            </div>
            <div class="table-row">
                <div class="title">Enterprise Resource<br> Planning (ERP)</div>
                <div class="logos">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/business-central.svg" alt="Business Central">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/acumatica.svg" alt="Acumatica">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/zoho-erp.svg" alt="Zoho ERP">
                </div>
            </div>
            <div class="table-row">
                <div class="title">Business<br> Intelligence (BI)</div>
                <div class="logos">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/power-BI.svg" alt="Power BI">
                </div>
            </div>
            <div class="table-row">
                <div class="title">Business Process<br> Automation</div>
                <div class="logos">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/power-automate.svg" alt="Power Automate">
                    <img src="/wp-content/themes/business-analysis/src/images/icons/ui-path.svg" alt="Ui Path">
                </div>
            </div>
        </div>
	</div>
</section>

<section class="two-columns-text without-arrow-block">
	<div class="container-lg">
        <div class="heading">
            <div class="sup-title">REMOTE BUSINESS ANALYSTS</div>
            <h2>Why Hire a Remote Business Analyst?</h2>
            <p>Lacking business analysis & planning expertise in your in-house team? No worries! External BA service providers like Drupfan are here to cover all your business analysis needs. By hiring our remote specialists, you gain access to expert guidance, clear project planning, and strategic insights without the commitment to full-time in-house resources.</p>
        </div>
        <div class="columns-holder">
            <div class="column">
                <h5>Cost efficiency</h5>
                <p>Save money by avoiding the expenses of hiring, training, and maintaining a full-time employee. Remote BAs allow you to allocate resources where they matter most.</p>
                <h5>Time savings</h5>
                <p>Skip the lengthy recruitment process and onboard a skilled remote BA quickly, ensuring your project starts without unnecessary delays.</p>
            </div>
            <div class="column">
                <h5>Global talent pool</h5>
                <p>Gain access to a wide network of experienced professionals from top BA locations across Canada and Europe, increasing your chances of finding the perfect match for your business needs.</p>
                <h5>Industry-focused expertise</h5>
                <p>Remote BAs often have diverse experience across various domains, providing custom solutions and fresh insights specific to your industry.</p>
            </div>
        </div>
        <div class="btn-holder">
            <a href="javascript:void(0)" class="button-cta secondary-btn">Hire remote BAs</a>
        </div>
    </div>
</section>

<section class="three-columns-numbers">
	<div class="container-lg">
		<div class="heading">
            <div class="sup-title">HOW WE WORK</div>
            <h2>Look Behind the Curtains of Our<br> Business Analysis Process</h2>
            <p>Curious how a basic business analysis process works? Take a closer look at our BA<br> procedures. Our BAs stay involved at every stage of the pre-development phase and<br> thoroughly guide projects after launch.</p>
        </div>
        <div class="list-with-numbers-grid">
            <div class="item">
                <div class="heading">
                    <div class="number">1</div>
                    <h4>Discover business needs and objectives</h4>
                </div>
                <p>During the discovery phase, our specialists closely communicate with stakeholders to collect their vision, expectations, and requirements. We laser-focus on industry specifics and invest time to understand the needs of your domain.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">2</div>
                    <h4>Conduct competitors’ research</h4>
                </div>
                <p>Our specialists conduct in-depth competitor research to understand market needs and clients’ expectations. After that, we create long-term strategies to keep your product competitive in the market.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">3</div>
                    <h4>Design product vision</h4>
                </div>
                <p>Our BA consultants determine the direction a future solution should follow to align with the given objectives and KPIs. They assess the necessary resources to achieve the project's objectives and set deadlines accordingly.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">4</div>
                    <h4>Wireframing and MVP</h4>
                </div>
                <p>Stakeholders often seek a clear picture of the end product, preferably in a visual format. At Drupfan, we create wireframes, prototypes, and even MVPs to showcase the core features and functionalities of the digital solution.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">5</div>
                    <h4>Development planning</h4>
                </div>
                <p>Business analysts at Drupfan thoroughly plan the development phase based on data analysis and research. Our task is to clearly define the scope of work and prioritize task implementation, as well as to get rid of invalid features or functionalities.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">6</div>
                    <h4>Prioritize product backlog</h4>
                </div>
                <p>Our BA specialists evaluate and rank features based on their business value and impact, ensuring the development team focuses on delivering the most important functionalities first.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">7</div>
                    <h4>Documentation</h4>
                </div>
                <p>Detailed documentation is a key to the dev team’s success. Our business analytics consultancy creates detailed and structured documentation, outlining requirements, workflows, and guidelines to provide the development team with a clear roadmap for implementation.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">8</div>
                    <h4>Monitoring project development</h4>
                </div>
                <p>Throughout the development process, our BA specialists oversee progress, identify potential risks, and collaborate with the team to ensure the project remains on track and meets its objectives.</p>
            </div>
            <div class="item">
                <div class="heading">
                    <div class="number">9</div>
                    <h4>Post-launch product support</h4>
                </div>
                <p>After the launch, our BAs analyze user feedback, monitor performance, and recommend updates or improvements to maximize the product's success and value.</p>
            </div>
        </div>
	</div>
</section>

<section class="three-columns-icons">
	<div class="container-lg">
		<div class="heading">
            <div class="sup-title">BA OUTSTAFFING</div>
            <h2>Our Engagement Models for<br> Business Analysis Outstaffing</h2>
            <p>Drupfan proudly collaborates with businesses of any size: from startups to global<br> enterprises. With headquarters in Ottawa, Canada, we offer flexible engagement models<br> for our clients from Northern America and Europe.</p>
        </div>
        <div class="grid-holder">
            <div class="item">
                <div class="heading-holder">
                     <img src="/wp-content/themes/business-analysis/src/images/circle-icon1.svg" alt="Icon">
                     <h4>BA as a full-time specialist for your in-house team</h4>
                </div>
                <p>Having a dedicated business analyst on your team is a game-changer. However, finding and retaining the right BA specialist can take a lot of time and effort. That’s where Drupfan steps in! We provide experienced business analysts for full-time outstaffing to seamlessly strengthen your internal team and guide your staff members throughout the whole development life cycle.</p>
            </div>
            <div class="item">
                <div class="heading-holder">
                     <img src="/wp-content/themes/business-analysis/src/images/circle-icon2.svg" alt="Icon">
                     <h4>BA on time & material basis</h4>
                </div>
                <p>Need flexible business analysis services billed on a time and material or hourly rate basis? We’ve got you covered. Whether it’s for a short-term project or ongoing support, our experienced BAs are ready to jump in, adapt to your needs, and deliver results without long-term commitments. Let us provide the expertise you need, exactly when you need it!</p>
            </div>
            <div class="item">
                <div class="heading-holder">
                     <img src="/wp-content/themes/business-analysis/src/images/circle-icon3.svg" alt="Icon">
                     <h4>Business analysis as a service (BAaaS)</h4>
                </div>
                <p>Our business analysis as a service (BAaaS) model includes the formation of a dedicated team of seasoned BAs to work exclusively on your project. This is an on-demand access to experienced business analysts who can assist with any BA-related task from market research to strategy optimization. With BAaaS you gain full commitment with the need for full-time hires.</p>
            </div>
        </div>
        <div class="btn-holder">
            <a href="javascript:void(0)" class="button-cta">Learn more about BA outstaffing</a>
        </div>
	</div>
</section>

<section class="faq-section">
	<div class="container-lg">
		<div class="heading">
            <div class="sup-title">FAQ</div>
            <h2>Business Analysis Service —<br> Frequently Asked Questions</h2>
        </div>
        <div class="faq-holder">
            <div class="faq-item">
                <div class="faq-title">When do I need business analysis?</div>
                <div class="faq-body">
                    <p>Drupfan proudly collaborates with businesses of any size: from startups to global enterprises. With headquarters in Ottawa, Canada, we offer flexible engagement models for our clients from Northern America and Europe.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">Why do I need business analysis?</div>
                <div class="faq-body">
                    <p>Drupfan proudly collaborates with businesses of any size: from startups to global enterprises. With headquarters in Ottawa, Canada, we offer flexible engagement models for our clients from Northern America and Europe.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">Who is a business analyst?</div>
                <div class="faq-body">
                    <p>Drupfan proudly collaborates with businesses of any size: from startups to global enterprises. With headquarters in Ottawa, Canada, we offer flexible engagement models for our clients from Northern America and Europe.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">What does a business analyst do?</div>
                <div class="faq-body">
                    <p>Drupfan proudly collaborates with businesses of any size: from startups to global enterprises. With headquarters in Ottawa, Canada, we offer flexible engagement models for our clients from Northern America and Europe.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">What responsibilities are common for BA?</div>
                <div class="faq-body">
                    <p>The responsibilities of a business analyst directly depend on the project’s needs and objectives. The most common tasks include:</p>
                    <ul>
                        <li>Provide support to the project team as required.</li>
                        <li>Serve as a liaison between internal and external stakeholders.</li>
                        <li>Assist in drafting, reviewing, and refining test procedures and reports.</li>
                        <li>Participate in the development of a strategic roadmap for customer initiatives.</li>
                        <li>Define and document processes to ensure effective management of responsibilities.</li>
                        <li>Design use case scenarios for user acceptance testing.</li>
                        <li>Oversee multiple projects and priorities in a fast-paced, evolving environment.</li>
                        <li>Create and maintain test strategies, plans, and cases.</li>
                        <li>Generate on-demand reports, data queries, routine reports, and dashboards to address business requirements.</li>
                        <li>Incorporate research, team inputs, and client feedback into solution designs.</li>
                        <li>Ensure the accuracy and quality of project documentation and software designs.</li>
                        <li>Maintain detailed records of system changes, both completed and ongoing.</li>
                        <li>Identify and document potential business scenarios and outcomes.</li>
                        <li>Develop and manage project schedules and milestone plans.</li>
                        <li>Collaborate with business stakeholders to address process inefficiencies.</li>
                        <li>Conduct root cause analysis for business challenges and recommend solutions.</li>
                        <li>Apply feedback to refine work and build on previous experiences.</li>
                        <li>Support quality assurance efforts through test planning and reviews with business partners.</li>
                    </ul>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">How much does BA services cost?</div>
                <div class="faq-body">
                    <p>Drupfan proudly collaborates with businesses of any size: from startups to global enterprises. With headquarters in Ottawa, Canada, we offer flexible engagement models for our clients from Northern America and Europe.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">How to choose a reliable business analysis agency for software development?</div>
                <div class="faq-body">
                    <p>Drupfan proudly collaborates with businesses of any size: from startups to global enterprises. With headquarters in Ottawa, Canada, we offer flexible engagement models for our clients from Northern America and Europe.</p>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="cards">
	<div class="container-lg">
		<div class="heading">
            <h2>Discover Trends & Insights in Business<br> Analysis and Consulting</h2>
        </div>
        <div class="cards-holder">
            <div class="card">
                <div class="image">
                    <img src="/wp-content/themes/business-analysis/src/images/card-image1.webp" alt="Image">
                </div>
                <div class="content">
                    <div class="text-holder">
                        <div class="title">How Can Drupal and React Work Together</div>
                        <p>Poor website performance combined with a confusing User Interface (UI) inevitably leads to a negative User Experience (UX). Thus, your website loses customer loyalty and can even become abandoned by most of them.</p>
                    </div>
                    <div class="btn-holder">
                        <a href="" class="arrow-btn">Read more <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
                    </div>
                </div>
            </div>
            <div class="card">
	            <div class="image">
	                <img src="/wp-content/themes/business-analysis/src/images/card-image2.webp" alt="Image">
	            </div>
	            <div class="content">
	                <div class="text-holder">
	                    <div class="title">Email Marketing Tools Available for Drupal 10</div>
                        <p>Email marketing is an integral part of a successful business strategy. It is a proven way to reach your audience and notify them of the latest products, sales, business-related information, and more. Whether your goal...</p>
	                </div>
	                <div class="btn-holder">
	                    <a href="" class="arrow-btn">Read more <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
	                </div>
	            </div>
	        </div>
	        <div class="card">
	            <div class="image">
	                <img src="/wp-content/themes/business-analysis/src/images/card-image3.webp" alt="Image">
	            </div>
	            <div class="content">
	                <div class="text-holder">
	                    <div class="title">Why Continuous Drupal Website Maintenance and Updates Are Important</div>
                        <p>Finally, your website is up and running after the web development process is over. It might look like you no longer need to consider the tech part of your online business....</p>
	                </div>
	                <div class="btn-holder">
	                    <a href="" class="arrow-btn">Read more <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
	                </div>
	            </div>
	        </div>
        </div>
	</div>
</section>

<section class="contact-section">
	<div class="container-lg">
		<div class="columns-holder">
			<div class="form-column">
				<h2>Talk to Our BA Consultants</h2>
				<p>Request your quote now and take full advantage of the opportunities business analysis can bring to your business!</p>
				<div class="form">
					<?php echo do_shortcode('[contact-form-7 id="5bf5277" title="Pop up form"]'); ?>
				</div>
			</div>
			<div class="image-column">
				<img src="/wp-content/themes/business-analysis/src/images/contact-image.webp" alt="Image">
			</div>
		</div>
	</div>
</section>
