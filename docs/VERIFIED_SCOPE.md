# ขอบเขตที่ตรวจสอบจากระบบจริง

Repository: `intasan/lodging-booking-system`
ฐาน source ที่ตรวจ: `5d90e6b199168e31cd0f2b4f80031857b78a3310`

**สถานะ: ทดสอบ logic ผ่าน; ข้อมูลธุรกิจยังไม่มี**

4 unit tests ผ่านด้วย fixture ในหน่วยความจำเท่านั้น; runtime ใหม่ไม่สร้าง sample rooms; ไม่มีข้อมูลห้องจริงหรือการเชื่อมผู้ประกอบการ

## แหล่งหลักฐาน

- [evidence/verification-2026-10-30.txt](../evidence/verification-2026-10-30.txt)
- [evidence/source-audit.json](../evidence/source-audit.json)
- [evidence/api-tests.txt](../evidence/api-tests.txt)

## Traceability จาก source

| ไฟล์ที่ตรวจ | ขอบเขตที่ยืนยันได้ |
|---|---|
| [legacy/database.sql](../legacy/database.sql) | schema ที่เขียนไว้; ยังไม่ถือว่าติดตั้ง DB จริงแล้ว |
| [server.js](../server.js) | พบ source ใน commit ข้างต้น; การมีไฟล์ไม่ใช่การทดสอบผ่าน |

## เกณฑ์ตรวจรับ BA / SA

| เกณฑ์ | หลักฐาน / สถานะ |
|---|---|
| ขอบเขตปัจจุบันตรงกับ source | ทดสอบ logic ผ่าน; ข้อมูลธุรกิจยังไม่มี |
| End-to-end ด้วยข้อมูลจริง | 4 unit tests ผ่านด้วย fixture ในหน่วยความจำเท่านั้น; runtime ใหม่ไม่สร้าง sample rooms; ไม่มีข้อมูลห้องจริงหรือการเชื่อมผู้ประกอบการ |
| ผลการทดสอบที่ทำซ้ำได้ | อ่าน command, stdout, exit code ใน evidence; syntax check ไม่ใช่ runtime test |
| ข้อมูลจริงและ provenance | เฉพาะราคาทองใน live-verification.txt ที่มี URL/เวลา publication; ไม่ใช้ fixture เป็นข้อมูลจริง |
| UAT โดยเจ้าของงานหรือผู้ใช้งาน | ยังไม่ได้ดำเนินการในรอบนี้ |

## ข้อจำกัดการแสดงผลงาน

ผล unit tests เป็นการตรวจ logic โดยมี fixture ตาม suite เดิม ไม่ใช่หลักฐานธุรกรรมจริง การฝึกโมเดลจริง การทำงานของอุปกรณ์จริง หรือการรับรองจากผู้ใช้ ไม่สร้างข้อมูลธุรกิจทดแทนข้อมูลที่ขาด และไม่อนุมานว่าไม่มีข้อมูลเท่ากับปลอดภัย
