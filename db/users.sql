--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.13
-- Dumped by pg_dump version 9.4.0
-- Started on 2015-05-05 19:13:43 IST

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
-- TOC entry 443 (class 1259 OID 119649)
-- Name: users; Type: TABLE; Schema: cs230teamd6; Owner: cs230teamd6; Tablespace: 
--

CREATE TABLE users (
    user_id integer NOT NULL,
    user_fname character varying(50),
    user_lname character varying(100),
    username character varying(100),
    user_email character varying(200),
    user_password character varying(100)
);


ALTER TABLE users OWNER TO cs230teamd6;

--
-- TOC entry 446 (class 1259 OID 119663)
-- Name: users_user_id_seq; Type: SEQUENCE; Schema: cs230teamd6; Owner: cs230teamd6
--

CREATE SEQUENCE users_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_user_id_seq OWNER TO cs230teamd6;

--
-- TOC entry 2916 (class 0 OID 0)
-- Dependencies: 446
-- Name: users_user_id_seq; Type: SEQUENCE OWNED BY; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER SEQUENCE users_user_id_seq OWNED BY users.user_id;


--
-- TOC entry 2806 (class 2604 OID 119665)
-- Name: user_id; Type: DEFAULT; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER TABLE ONLY users ALTER COLUMN user_id SET DEFAULT nextval('users_user_id_seq'::regclass);


--
-- TOC entry 2910 (class 0 OID 119649)
-- Dependencies: 443
-- Data for Name: users; Type: TABLE DATA; Schema: cs230teamd6; Owner: cs230teamd6
--

COPY users (user_id, user_fname, user_lname, username, user_email, user_password) FROM stdin;
1	danisdla	asdf	asdf@asd.om	asdf@asd.om	$5$rounds=10000$OvXfwsaKaiBk6g/A$RrhCkAHywQyUzNcZO62PvEerFIMcAhRmMPz.LiDnyH6
\.


--
-- TOC entry 2917 (class 0 OID 0)
-- Dependencies: 446
-- Name: users_user_id_seq; Type: SEQUENCE SET; Schema: cs230teamd6; Owner: cs230teamd6
--

SELECT pg_catalog.setval('users_user_id_seq', 9, true);


--
-- TOC entry 2808 (class 2606 OID 119670)
-- Name: users_pkey; Type: CONSTRAINT; Schema: cs230teamd6; Owner: cs230teamd6; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);


-- Completed on 2015-05-05 19:13:45 IST

--
-- PostgreSQL database dump complete
--

