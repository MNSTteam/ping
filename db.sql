CREATE TABLE public.ping_banned (
    wallet character varying DEFAULT ''::character varying NOT NULL,
    commenttx character varying DEFAULT ''::character varying NOT NULL,
    tx character varying DEFAULT ''::character varying NOT NULL,
    block integer DEFAULT 0 NOT NULL
);

CREATE TABLE public.ping_comments (
    wallet character varying DEFAULT ''::character varying NOT NULL,
    posttx character varying DEFAULT ''::character varying NOT NULL,
    tx character varying DEFAULT ''::character varying NOT NULL,
    block integer DEFAULT 0 NOT NULL,
    banned integer DEFAULT 0 NOT NULL,
    fromaddress character varying DEFAULT ''::character varying NOT NULL
);

CREATE TABLE public.ping_keys (
    wallet character varying DEFAULT ''::character varying NOT NULL,
    key character varying DEFAULT ''::character varying NOT NULL,
    tx character varying DEFAULT ''::character varying NOT NULL,
    block integer DEFAULT 0 NOT NULL
);

CREATE TABLE public.ping_likes (
    wallet character varying DEFAULT ''::character varying NOT NULL,
    posttx character varying DEFAULT ''::character varying NOT NULL,
    tx character varying DEFAULT ''::character varying NOT NULL,
    block integer DEFAULT 0 NOT NULL,
    value numeric DEFAULT 0 NOT NULL,
    tow character varying DEFAULT ''::character varying NOT NULL
);

CREATE TABLE public.ping_posts (
    wallet character varying DEFAULT ''::character varying NOT NULL,
    tx character varying DEFAULT ''::character varying NOT NULL,
    block integer DEFAULT 0 NOT NULL
);

CREATE TABLE public.ping_private (
    wf character varying DEFAULT ''::character varying NOT NULL,
    wt character varying DEFAULT ''::character varying NOT NULL,
    tx character varying DEFAULT ''::character varying NOT NULL,
    block integer DEFAULT 0 NOT NULL
);

CREATE TABLE public.ping_rsa (
    wallet character varying DEFAULT ''::character varying NOT NULL,
    pk character varying DEFAULT ''::character varying NOT NULL
);