# Acceptance evidence — 30 October 2026

Executable cases are in `tests/booking.test.js`; captured output in `evidence/api-tests.txt`.

| Case | Expected | Result |
|---|---|---|
| Garden, 2 nights, manipulated total | Server total 2400 | PASS API |
| Same, enclosed and partially overlapping dates | Reject 409 | PASS API |
| Adjacent checkout/checkin | Allow | PASS API |
| Other session cancellation | Reject 404 | PASS API |
| Cancel own booking | Availability restored | PASS API + browser |
| Invalid calendar/past/reversed/>30-night dates | Reject | PASS API |
| Too many or fractional guests, missing room | Reject | PASS API |
| Guest filter 4 | Only Family Loft | PASS API |
| Chrome: search then book Garden | Confirmed 2400 | PASS browser |
| Chrome: reload | History retained, room unavailable | PASS browser |

No real hotel, payments, mobile-device or production-load testing claimed.
