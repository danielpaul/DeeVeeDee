--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.13
-- Dumped by pg_dump version 9.4.0
-- Started on 2015-05-05 19:05:26 IST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = cs230teamd6, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 428 (class 1259 OID 119528)
-- Name: movies; Type: TABLE; Schema: cs230teamd6; Owner: cs230teamd6; Tablespace: 
--

CREATE TABLE movies (
    movid_id integer NOT NULL,
    movie_title character varying(50),
    movie_release_year integer,
    movie_description character varying(10000),
    movie_youtube_link character varying(100),
    movie_director character varying(200),
    movie_genre integer,
    movie_price integer DEFAULT 5
);


ALTER TABLE movies OWNER TO cs230teamd6;

--
-- TOC entry 429 (class 1259 OID 119537)
-- Name: movies_movid_id_seq; Type: SEQUENCE; Schema: cs230teamd6; Owner: cs230teamd6
--

CREATE SEQUENCE movies_movid_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE movies_movid_id_seq OWNER TO cs230teamd6;

--
-- TOC entry 2917 (class 0 OID 0)
-- Dependencies: 429
-- Name: movies_movid_id_seq; Type: SEQUENCE OWNED BY; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER SEQUENCE movies_movid_id_seq OWNED BY movies.movid_id;


--
-- TOC entry 2806 (class 2604 OID 119539)
-- Name: movid_id; Type: DEFAULT; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER TABLE ONLY movies ALTER COLUMN movid_id SET DEFAULT nextval('movies_movid_id_seq'::regclass);


--
-- TOC entry 2911 (class 0 OID 119528)
-- Dependencies: 428
-- Data for Name: movies; Type: TABLE DATA; Schema: cs230teamd6; Owner: cs230teamd6
--

COPY movies (movid_id, movie_title, movie_release_year, movie_description, movie_youtube_link, movie_director, movie_genre, movie_price) FROM stdin;
20	Entourage	2004	Film star Vince Chase navigates the vapid terrain of Los Angeles with a close circle of friends and his trusty agent.	https://www.youtube.com/watch?v=XZ5wtKr3LWE	Doug Ellin	2	5
2	Avengers: Age of Ultron	2015	When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and it is up to the Avengers to stop the villainous Ultron from enacting his terrible plans.	https://www.youtube.com/watch?v=tmeOjFno6Do	Joss Whedon	1	10
5	Run All Night	2015	Mobster and hit man Jimmy Conlon has one night to figure out where his loyalties lie: with his estranged son, Mike, whose life is in danger, or his longtime best friend, mob boss Shawn Maguire, who wants Mike to pay for the death of his own son.	https://www.youtube.com/watch?v=7uDuFh-nC-c	Jaume Collet-Serra	1	10
3	Kingsman: The Secret Service	2014	A spy organization recruits an unrefined, but promising street kid into the agency's ultra-competitive training program, just as a global threat emerges from a twisted tech genius.	https://www.youtube.com/watch?v=m4NCribDx4U	Matthew Vaughn	1	5
4	Exodus: Gods and Kings	2014	The defiant leader Moses rises up against the Egyptian Pharaoh Ramses, setting 600,000 slaves on a monumental journey of escape from Egypt and its terrifying cycle of deadly plagues.	https://www.youtube.com/watch?v=t-8YsulfxVI	Ridley Scott	1	5
8	San Andreas	2015	In the aftermath of a massive earthquake in California, a rescue-chopper pilot makes a dangerous journey across the state in order to rescue his estranged daughter.	https://www.youtube.com/watch?v=23VflsU3kZE	Brad Peyton	1	10
6	Big Hero 6	2014	The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.	https://www.youtube.com/watch?v=bT8qmoCgxZg	Don Hall	1	5
7	Furious 7	2015	Deckard Shaw seeks revenge against Dominic Toretto and his family for the death of his brother.	https://www.youtube.com/watch?v=Skpu5HaVkOc	James Wan	1	5
11	The Wire	2002	Baltimore drug scene, seen through the eyes of drug dealers, and law enforcement.	https://www.youtube.com/watch?v=apZQlqPp6Hs	David Simon	2	17
9	American Sniper	2014	Navy SEAL sniper Chris Kyle's pinpoint accuracy saves countless lives on the battlefield and turns him into a legend. Back home to his wife and kids after four tours of duty, however, Chris finds that it is the war he can't leave behind.	https://www.youtube.com/watch?v=5bP1f_1o-zo	Clint Eastwood	1	5
10	Star Wars: Episode VII - The Force Awakens	2015	A continuation of the saga created by George Lucas set thirty years after Star Wars: Episode VI - Return of the Jedi (1983).	https://www.youtube.com/watch?v=rNBlhxBhbME	J.J. Abrams	1	10
12	The Sopranos	1999	New Jersey mob boss, Tony Soprano, deals with personal and professional issues in his home and business life.	https://www.youtube.com/watch?v=LBdIcvv864I	David Chase	2	17
13	Friday Night Lights	2006	The trials and tribulations of small town Texas football players, their friends, family, and coaching staff.	https://www.youtube.com/watch?v=AG37AylK1_s	Peter Berg	2	10
14	The Office	2005	A mockumentary on a group of typical office workers, where the workday consists of ego clashes, inappropriate behavior, and tedium. Based on the hit BBC series.	https://www.youtube.com/watch?v=cRpbuYnHWQY	Greg Daniels	2	15
16	Friends	1994	Follows the lives of six 20-something friends living in Manhattan.	https://www.youtube.com/watch?v=hDNNmeeJs1Q	David Crane	2	13
26	Pixels	2015	When aliens misinterpret video feeds of classic arcade games as a declaration of war, they attack the Earth in the form of the video games.	https://www.youtube.com/watch?v=XAHprLW48no	Chris Columbus	3	10
17	Scrubs	2001	In the unreal world of Sacred Heart Hospital, intern John "J.D" Dorian learns the ways of medicine, friendship and life.	https://www.youtube.com/watch?v=Ji6-Pbfypys	Bill Lawrence	2	15
21	Home	2015	Oh, an alien on the run from his own people, lands on Earth and makes friends with the adventurous Tip, who is on a quest of her own.	https://www.youtube.com/watch?v=MyqZf8LiWvM	Tim Johnson	3	5
19	The Inbetweeners	2008	The exploits of four friends, who are socially only marginally above what one of them calls "the freaks", are presented as they grow from their late teen years into adults and as they go on their quest, usually unsuccessfully, for such grown up things as beer and sex. Simon Cooper, Jay Cartwright and Neil Sutherland have been friends for some time. Insecure Simon's main quest in life is to get long time friend, Carli D'Amato, to be his girlfriend. Jay is the big talker whose stories, especially about his sexual conquests, are more fantasy than reality. And slightly dim-witted Neil is generally two steps behind everyone else in comprehension of life, and who is always defending his father from beliefs that he's a closet homosexual. Into the group comes its fourth member, Will McKenzie, who met them when he transferred into their school, Rudge Park Comprehensive, at the start of sixth form, as Will's newly divorced mum could no longer afford his private school tuition. Nerdish and straight-laced Will, ridiculed for carrying a briefcase, insinuated himself in the group - not aiming his sights too high - as he tried not to be labeled as one of the freaks. Regardless, he is still the target of the school's "psycho bully", Mark Donovan, and the head of Rudge Park's sixth form, Mr. Gilbert. Will's initial saving grace in bonding with his new mates may have been that they all want to shag his pretty but protective mother, Polly.	https://www.youtube.com/watch?v=950-4oaMQgY	Ben Palmer	2	5
22	Get Hard	2015	When millionaire James King is nailed for fraud and bound for San Quentin, he turns to Darnell Lewis to prep him to go behind bars.	https://www.youtube.com/watch?v=lEqrpuU9fYI	Etan Cohen	3	5
18	Misfits	2009	A group of young offenders doing community service get struck by lightning during a storm, and begin to develop superpowers.	https://www.youtube.com/watch?v=VsBYXLYNZlE	Howard Overman	2	20
15	Breaking Bad	2008	A chemistry teacher diagnosed with a terminal lung cancer, teams up with his former student, Jesse Pinkman, to cook and sell crystal meth.	https://www.youtube.com/watch?v=OBgBknbUf_E	Vince Gilligan	2	30
23	Focus	2015	In the midst of veteran con man Nicky's latest scheme, a woman from his past - now an accomplished femme fatale - shows up and throws his plans for a loop.	https://www.youtube.com/watch?v=MxCRgtdAuBo	Glenn Ficarra	3	5
24	Birdman	2014	A washed-up actor, who once played an iconic superhero, battles his ego and attempts to recover his family, his career and himself in the days leading up to the opening of his Broadway play.	https://www.youtube.com/watch?v=uJfLoE6hanc	Alejandro G. Iñárritu	3	5
25	Paddington	2014	A young Peruvian bear travels to London in search of a home. Finding himself lost and alone at Paddington Station, he meets the kindly Brown family, who offer him a temporary haven.	https://www.youtube.com/watch?v=CxeBdrGGU8U	Paul King	3	5
47	The Matrix	1999	A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.	https://www.youtube.com/watch?v=Q8g9zL-JL8E	The Wachowski Brothers	5	3
28	A Million Ways to Die in the West 	2014	As a cowardly farmer begins to fall for the mysterious new woman in town, he must put his new-found courage to the test when her husband, a notorious gun-slinger, announces his arrival.	https://www.youtube.com/watch?v=CXxqG4aqwY4	Seth MacFarlane	3	5
29	The Wolf Of Wall Street	2013	Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.	https://www.youtube.com/watch?v=iszwuX1AK6A	Martin Scorsese	3	5
30	The Grand Budapest Hotel	2014	The adventures of Gustave H, a legendary concierge at a famous hotel from the fictional Republic of Zubrowka between the first and second World Wars, and Zero Moustafa, the lobby boy who becomes his most trusted friend.	https://www.youtube.com/watch?v=1Fg5iWmQjwk	Wes Anderson	3	5
48	Donnie Darko	2001	A troubled teenager is plagued by visions of a large bunny rabbit that manipulates him to commit a series of crimes, after narrowly escaping a bizarre accident.	https://www.youtube.com/watch?v=qdKbNuhXWvQ	Richard Kelly	5	3
31	It Follows	2014	A young woman is followed by an unknown supernatural force after getting involved in a sexual encounter.	https://www.youtube.com/watch?v=9tyMi1Hn32I	David Robert Mitchell	4	5
43	Prometheus	2012	Following clues to the origin of mankind a team journey across the universe and find a structure on a distant planet containing a monolithic statue of a humanoid head and stone cylinders of alien blood but they soon find they are not alone.	https://www.youtube.com/watch?v=r-EZC5zn2Fk	Ridley Scott	5	5
32	Sinister 2	2015	A young mother and her twin sons move into a rural house that's marked for death.	https://www.youtube.com/watch?v=pgYxydrVlDk	Ciaran Foy	4	5
33	Poltergeist 	2015	A family's suburban home is invaded by evil forces.	https://www.youtube.com/watch?v=HD2sz9RVzfM	Gil Kenan	4	5
44	John Carter	2012	Transported to Barsoom, a Civil War vet discovers a barren planet seemingly inhabited by 12-foot tall barbarians. Finding himself prisoner of these creatures, he escapes, only to encounter Woola and a princess in desperate need of a savior.	https://www.youtube.com/watch?v=6Rf55GTEZ_E	Andrew Stanton	5	5
34	Unfriended	2014	A group of online chat room friends find themselves haunted by a mysterious, supernatural force using the account of their dead friend.	https://www.youtube.com/watch?v=JQfjW0DLDr0	Leo Gabriadze	4	5
35	The Harvest	2013	A couple who keeps their sick son in a secluded environment find their controlled lives challenged by a young girl who moves in next door.	https://www.youtube.com/watch?v=kQcXJtvUIkw	John McNaughton	4	5
36	Insidious: Chapter 3	2015	A prequel set before the haunting of the Lambert family that reveals how gifted psychic Elise Rainier reluctantly agrees to use her ability to contact the dead in order to help a teenage girl who has been targeted by a dangerous supernatural entity.	https://www.youtube.com/watch?v=3HxEXnVSr1w	Leigh Whannell	4	5
45	X-Men: First Class	2011	In 1962, the United States government enlists the help of Mutants with superhuman abilities to stop a malicious dictator who is determined to start World War III.	https://www.youtube.com/watch?v=UrbHykKUfTM	Matthew Vaughn	5	5
37	The Lazarus Effect	2015	A group of medical students discover a way to bring dead patients back to life.	https://www.youtube.com/watch?v=1Ks6JqLzVTA	David Gelb	4	5
38	Sinister 1	2012	A true-crime writer finds a cache of 8mm home movies films that suggest the murder he is currently researching is the work of a serial killer whose career dates back to the 1960s.	https://www.youtube.com/watch?v=4InFwCO3bOs	Scott Derrickson	4	5
39	The Devil's Rejects	2005	The murderous, backwoods Firefly family take to the road to escape a vengeful police force which is not afraid of being as ruthless as their target.	https://www.youtube.com/watch?v=apZ_F8aDFmc	Rob Zombie	4	5
40	The Conjuring	2013	Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.	https://www.youtube.com/watch?v=Vjk2So3KvSQ	James Wan	4	5
46	Her	2013	A lonely writer develops an unlikely relationship with his newly purchased operating system that's designed to meet his every need.	https://www.youtube.com/watch?v=dJTU48_yghs	Spike Jonze	5	5
41	Snowpiercer	2013	Set in a future where a failed climate-change experiment kills all life on the planet except for a lucky few who boarded the Snowpiercer, a train that travels around the globe, where a class system emerges.	https://www.youtube.com/watch?v=fyWfZ9866DE	Joon-ho Bong	5	5
42	Spring	2014	A young man in a personal tailspin flees the US to Italy, where he sparks up a romance with a woman harboring a dark, primordial secret.	https://www.youtube.com/watch?v=668ZdEbXlPY	Justin Benson	5	5
49	Iron Man	2008	After being held captive in an Afghan cave, an industrialist creates a unique weaponized suit of armor to fight against evil. This leads him to conflict within his own company.	https://www.youtube.com/watch?v=bK_Y5LjSJ-Y	Jon Favreau	5	5
27	The DUFF	2015	A high school senior instigates a social pecking order revolution after finding out that she has been labeled the DUFF - Designated Ugly Fat Friend - by her prettier, more popular counterparts.	https://www.youtube.com/watch?v=0tbRlEXrysU	Ari Sandel	3	10
1	Chappie	2015	In the near future, crime is patrolled by a mechanized police force. When one police droid, Chappie, is stolen and given new programming, he becomes the first robot with the ability to think and feel for himself.	https://www.youtube.com/watch?v=l6bmTNadhJE	Neill Blomkamp	1	10
50	A Clockwork Orange	1971	In future Britain, charismatic delinquent Alex DeLarge is jailed and volunteers for an experimental aversion therapy developed by the government in an effort to solve society's crime problem - but not all goes according to plan.	https://www.youtube.com/watch?v=gmm5jeeH8mY	Stanley Kubrick	5	3
\.


--
-- TOC entry 2918 (class 0 OID 0)
-- Dependencies: 429
-- Name: movies_movid_id_seq; Type: SEQUENCE SET; Schema: cs230teamd6; Owner: cs230teamd6
--

SELECT pg_catalog.setval('movies_movid_id_seq', 1, false);


--
-- TOC entry 2809 (class 2606 OID 119554)
-- Name: movies_pkey; Type: CONSTRAINT; Schema: cs230teamd6; Owner: cs230teamd6; Tablespace: 
--

ALTER TABLE ONLY movies
    ADD CONSTRAINT movies_pkey PRIMARY KEY (movid_id);


-- Completed on 2015-05-05 19:05:27 IST

--
-- PostgreSQL database dump complete
--

