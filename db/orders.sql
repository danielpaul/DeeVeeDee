--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.13
-- Dumped by pg_dump version 9.4.0
-- Started on 2015-05-05 19:14:00 IST

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
-- TOC entry 440 (class 1259 OID 119626)
-- Name: orders; Type: TABLE; Schema: cs230teamd6; Owner: cs230teamd6; Tablespace: 
--

CREATE TABLE orders (
    order_id integer NOT NULL,
    movie_id integer,
    order_date date,
    total_order_price numeric(5,2)[],
    user_id integer
);


ALTER TABLE orders OWNER TO cs230teamd6;

--
-- TOC entry 442 (class 1259 OID 119638)
-- Name: orders_order_id_seq; Type: SEQUENCE; Schema: cs230teamd6; Owner: cs230teamd6
--

CREATE SEQUENCE orders_order_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE orders_order_id_seq OWNER TO cs230teamd6;

--
-- TOC entry 2918 (class 0 OID 0)
-- Dependencies: 442
-- Name: orders_order_id_seq; Type: SEQUENCE OWNED BY; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER SEQUENCE orders_order_id_seq OWNED BY orders.order_id;


--
-- TOC entry 2806 (class 2604 OID 119640)
-- Name: order_id; Type: DEFAULT; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER TABLE ONLY orders ALTER COLUMN order_id SET DEFAULT nextval('orders_order_id_seq'::regclass);


--
-- TOC entry 2912 (class 0 OID 119626)
-- Dependencies: 440
-- Data for Name: orders; Type: TABLE DATA; Schema: cs230teamd6; Owner: cs230teamd6
--

COPY orders (order_id, movie_id, order_date, total_order_price, user_id) FROM stdin;
9	20	\N	\N	3
10	12	\N	\N	3
11	11	\N	\N	3
12	20	\N	\N	3
13	5	\N	\N	3
14	4	\N	\N	3
15	3	\N	\N	3
16	2	\N	\N	3
17	1	\N	\N	3
18	1	\N	\N	2
19	1	\N	\N	3
20	4	\N	\N	3
21	15	\N	\N	4
22	20	\N	\N	8
23	8	\N	\N	3
24	2	\N	\N	4
\.


--
-- TOC entry 2919 (class 0 OID 0)
-- Dependencies: 442
-- Name: orders_order_id_seq; Type: SEQUENCE SET; Schema: cs230teamd6; Owner: cs230teamd6
--

SELECT pg_catalog.setval('orders_order_id_seq', 24, true);


--
-- TOC entry 2808 (class 2606 OID 119648)
-- Name: orders_pkey; Type: CONSTRAINT; Schema: cs230teamd6; Owner: cs230teamd6; Tablespace: 
--

ALTER TABLE ONLY orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (order_id);


--
-- TOC entry 2809 (class 2606 OID 119671)
-- Name: orders_movie_id_fkey; Type: FK CONSTRAINT; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER TABLE ONLY orders
    ADD CONSTRAINT orders_movie_id_fkey FOREIGN KEY (movie_id) REFERENCES movies(movid_id);


--
-- TOC entry 2810 (class 2606 OID 119676)
-- Name: orders_user_id_fkey; Type: FK CONSTRAINT; Schema: cs230teamd6; Owner: cs230teamd6
--

ALTER TABLE ONLY orders
    ADD CONSTRAINT orders_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(user_id);


-- Completed on 2015-05-05 19:14:01 IST

--
-- PostgreSQL database dump complete
--

