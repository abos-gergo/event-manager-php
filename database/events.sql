-- database: ../../../../../../c:/Users/abos.gergo/Downloads/event-manager-php/database/database.sqlite
BEGIN TRANSACTION;

DROP TABLE IF EXISTS "events";
CREATE TABLE "events" (
  "id" INTEGER,
  "title" TEXT,
  "description" TEXT,
  "startDate" TEXT,
  "startTime" TEXT,
  "maxParticipants" INTEGER,
  PRIMARY KEY("id" AUTOINCREMENT),
);

INSERT INTO "events" VALUES (1,'Building a new bunker','asdasd','2025-01-08','12:00',30),
INSERT INTO "events" VALUES (2,'Ganking near city','Max 10 people, all ganking gear specified in guild sheet','2025-01-08','15:20', 10);

COMMIT;