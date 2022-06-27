import http from 'k6/http';
import { sleep } from 'k6';

export const options = {
  stages: [
    { duration: '10s', target: 50 },
    { duration: '10s', target: 100 },
    { duration: '10s', target: 500 },
    { duration: '30s', target: 1000 },
    { duration: '10s', target: 500 },
    { duration: '15s', target: 0 },
  ],
};

export default function () {
 http.get('http://localhost:8080');
 //sleep(1);
} 